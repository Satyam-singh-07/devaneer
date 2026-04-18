<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::with('primaryImage');

        // Search by Name or Description
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('description', 'LIKE', "%{$search}%");
            });
        }

        // Filter by Status
        if ($request->filled('status')) {
            $query->where('is_active', $request->status);
        }

        // Filter by Stock Level
        if ($request->filled('stock')) {
            if ($request->stock == 'low') {
                $query->where('stock', '<=', 10);
            } elseif ($request->stock == 'out') {
                $query->where('stock', 0);
            }
        }

        $products = $query->latest()->paginate(10)->withQueryString();
        
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'mrp' => 'required|numeric|min:0',
            'price' => 'required|numeric|min:0',
            'gst' => 'required|numeric|min:0',
            'business_value' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $product = Product::create($request->only(['name', 'description', 'mrp', 'price', 'gst', 'business_value', 'stock', 'is_active']));

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key => $image) {
                $imageName = time() . '_' . $key . '.' . $image->extension();
                $image->move(public_path('uploads/products'), $imageName);
                $path = 'uploads/products/' . $imageName;

                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $path,
                    'is_primary' => ($key === 0),
                ]);
            }
        }

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        $product->load('images');
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'mrp' => 'required|numeric|min:0',
            'price' => 'required|numeric|min:0',
            'gst' => 'required|numeric|min:0',
            'business_value' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $product->update($request->only(['name', 'description', 'mrp', 'price', 'gst', 'business_value', 'stock', 'is_active']));

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key => $image) {
                $imageName = time() . '_' . $key . '.' . $image->extension();
                $image->move(public_path('uploads/products'), $imageName);
                $path = 'uploads/products/' . $imageName;

                // If product has no images yet, set first as primary
                $isPrimary = $product->images()->count() === 0 && $key === 0;

                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $path,
                    'is_primary' => $isPrimary,
                ]);
            }
        }

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        foreach ($product->images as $image) {
            if (File::exists(public_path($image->image_path))) {
                File::delete(public_path($image->image_path));
            }
        }
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }

    public function deleteImage(ProductImage $image)
    {
        if (File::exists(public_path($image->image_path))) {
            File::delete(public_path($image->image_path));
        }
        
        $productId = $image->product_id;
        $wasPrimary = $image->is_primary;
        $image->delete();

        if ($wasPrimary) {
            $nextImage = ProductImage::where('product_id', $productId)->first();
            if ($nextImage) {
                $nextImage->update(['is_primary' => true]);
            }
        }

        return back()->with('success', 'Image deleted successfully.');
    }

    public function setPrimaryImage(ProductImage $image)
    {
        ProductImage::where('product_id', $image->product_id)->update(['is_primary' => false]);
        $image->update(['is_primary' => true]);
        return back()->with('success', 'Primary image set successfully.');
    }
}
