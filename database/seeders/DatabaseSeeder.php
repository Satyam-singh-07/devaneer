<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin User
        \App\Models\User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('12345678'),
                'is_admin' => true,
            ]
        );

        // Dummy Products
        $wellnessProducts = [
            'Immunity Booster Syrup', 'Organic Green Tea', 'Natural Vitamin C', 'Herbal Sleep Aid',
            'Pure Omega-3 Fish Oil', 'Daily Multivitamin', 'Plant-Based Protein', 'Turmeric Curcumin',
            'Apple Cider Vinegar Gummies', 'Probiotic Defense', 'Magnesium Relax Powder', 'B-Complex Energy',
            'Zinc Immunity Shield', 'Ashwagandha Extract', 'Elderberry Immune Support', 'Collagen Peptides',
            'Detox Herbal Tea', 'Iron Vitality Complex', 'Mushroom Focus Blend', 'Aloe Vera Skin Juice'
        ];

        foreach ($wellnessProducts as $index => $name) {
            Product::create([
                'name' => $name,
                'description' => "Premium quality {$name} designed for optimal wellness and health support. 100% natural ingredients.",
                'mrp' => rand(1500, 5000),
                'price' => rand(1000, 1400), // DP Price
                'gst' => 18.00,
                'business_value' => rand(200, 800),
                'stock' => rand(50, 200),
                'is_active' => true,
            ]);
        }
    }
}
