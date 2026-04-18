@extends('layouts.website')

@section('title', $product->name . ' | Devaneer')
@section('meta_description', Str::limit($product->description, 160))

@php
    $discount = max($product->mrp - $product->price, 0);
    $discountPercent = $product->mrp > 0 ? round(($discount / $product->mrp) * 100) : 0;
    $primaryImage = $product->primaryImage ?? $product->images->first();
    $description = $product->description ?: 'Explore the premium quality of ' . $product->name . '. 100% natural and lab-tested for your health and wellness.';
@endphp

@section('content')
<section class="product-detail-shell">
    <div class="product-detail-backdrop"></div>
    <div class="container product-detail-container">
        <nav aria-label="breadcrumb" class="product-breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('home') }}" onclick="switchTab('shop')">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
            </ol>
        </nav>

        <div class="product-hero-grid">
            <div class="product-gallery-panel">
                <div class="gallery-stage">
                    <div class="gallery-stage-top">
                        <span class="gallery-chip">Premium wellness</span>
                        @if($product->stock > 0)
                            <span class="gallery-status in-stock"><i class="fas fa-check-circle"></i> In stock</span>
                        @else
                            <span class="gallery-status out-stock"><i class="fas fa-times-circle"></i> Out of stock</span>
                        @endif
                    </div>

                    <div class="gallery-image-frame">
                        @if($primaryImage)
                            <img
                                src="{{ asset($primaryImage->image_path) }}"
                                id="mainProductImage"
                                class="gallery-main-image"
                                alt="{{ $product->name }}"
                            >
                        @else
                            <div class="gallery-empty-state">
                                <i class="fas fa-image"></i>
                                <span>No product image</span>
                            </div>
                        @endif
                    </div>
                </div>

                @if($product->images->count() > 1)
                    <div class="gallery-thumbnails" aria-label="Product images">
                        @foreach($product->images as $image)
                            <button
                                type="button"
                                class="gallery-thumb {{ ($primaryImage && $primaryImage->id === $image->id) ? 'active-thumb' : '' }}"
                                onclick="changeMainImage('{{ asset($image->image_path) }}', this)"
                                aria-label="View image {{ $loop->iteration }}"
                            >
                                <img src="{{ asset($image->image_path) }}" alt="{{ $product->name }} thumbnail {{ $loop->iteration }}">
                            </button>
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="product-summary-panel">
                <div class="product-summary-card">
                    <div class="product-summary-meta">
                        <span class="summary-kicker">Devaneer product</span>
                        <span class="summary-id">ID #{{ str_pad($product->id, 5, '0', STR_PAD_LEFT) }}</span>
                    </div>

                    <h1 class="product-title-main">{{ $product->name }}</h1>
                    <p class="product-description-main">{{ $description }}</p>

                    <div class="product-highlights">
                        <div class="highlight-pill">
                            <span class="highlight-label">Business Value</span>
                            <strong>BV {{ $product->business_value }}</strong>
                        </div>
                        <div class="highlight-pill">
                            <span class="highlight-label">GST</span>
                            <strong>{{ $product->gst }}%</strong>
                        </div>
                        <div class="highlight-pill">
                            <span class="highlight-label">MRP savings</span>
                            <strong>₹{{ number_format($discount, 0) }}</strong>
                        </div>
                    </div>

                    <div class="price-block">
                        <div class="price-primary">
                            <span class="price-caption">Distributor price</span>
                            <div class="price-row">
                                <strong>₹{{ number_format($product->price, 2) }}</strong>
                                @if($discountPercent > 0)
                                    <span class="price-save-badge">{{ $discountPercent }}% off</span>
                                @endif
                            </div>
                            <span class="price-note">Inclusive of {{ $product->gst }}% GST</span>
                        </div>

                        <div class="price-secondary">
                            <span class="price-caption">MRP</span>
                            <strong>₹{{ number_format($product->mrp, 2) }}</strong>
                        </div>
                    </div>

                    <div class="purchase-panel">
                        <div class="qty-panel">
                            <span class="qty-label">Quantity</span>
                            <div class="qty-btn-group">
                                <button type="button" class="qty-action" onclick="updateDetailPageQty(-1)">-</button>
                                <input type="number" id="detailQty" value="1" min="1" readonly>
                                <button type="button" class="qty-action" onclick="updateDetailPageQty(1)">+</button>
                            </div>
                        </div>

                        <button
                            class="detail-add-cart-btn"
                            onclick="addToCartFromDetail({{ $product->id }}, '{{ $product->name }}', {{ $product->price }})"
                            @if($product->stock <= 0) disabled @endif
                        >
                            <i class="fas fa-shopping-cart"></i>
                            <span>{{ $product->stock > 0 ? 'Add to Cart' : 'Currently Unavailable' }}</span>
                        </button>
                    </div>

                    <div class="assurance-grid">
                        <div class="assurance-item">
                            <i class="fas fa-certificate"></i>
                            <div>
                                <strong>Verified quality</strong>
                                <span>Compliance-first product line</span>
                            </div>
                        </div>
                        <div class="assurance-item">
                            <i class="fas fa-leaf"></i>
                            <div>
                                <strong>Wellness focused</strong>
                                <span>Natural positioning with clean presentation</span>
                            </div>
                        </div>
                        <div class="assurance-item">
                            <i class="fas fa-truck"></i>
                            <div>
                                <strong>Fast dispatch</strong>
                                <span>Order-ready distributor flow</span>
                            </div>
                        </div>
                        <div class="assurance-item">
                            <i class="fas fa-shield-alt"></i>
                            <div>
                                <strong>Secure purchase</strong>
                                <span>Simple cart and GST-ready checkout</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-info-strip">
            <div class="info-card">
                <span class="info-label">About this product</span>
                <p>{{ $description }}</p>
            </div>
            <div class="info-card">
                <span class="info-label">Pricing snapshot</span>
                <ul class="detail-list">
                    <li>Distributor Price: ₹{{ number_format($product->price, 2) }}</li>
                    <li>MRP: ₹{{ number_format($product->mrp, 2) }}</li>
                    <li>GST Included: {{ $product->gst }}%</li>
                </ul>
            </div>
            <div class="info-card">
                <span class="info-label">Why it stands out</span>
                <ul class="detail-list">
                    <li>Business value of {{ $product->business_value }} for plan calculations</li>
                    <li>Presented with clear pricing and stock visibility</li>
                    <li>Fits the premium wellness catalog language</li>
                </ul>
            </div>
        </div>

        @if($relatedProducts->count() > 0)
            <div class="related-products-block">
                <div class="related-heading">
                    <div>
                        <span class="related-kicker">More to explore</span>
                        <h2>You may also like</h2>
                    </div>
                    <a href="{{ route('home') }}" class="related-link">View all products</a>
                </div>

                <div class="product-grid">
                    @foreach($relatedProducts as $related)
                        <div class="product-card detail-related-card h-100">
                            <a href="{{ route('product.show', $related->id) }}" class="text-decoration-none">
                                <div class="product-image detail-related-image">
                                    @if($related->primaryImage)
                                        <img src="{{ asset($related->primaryImage->image_path) }}" alt="{{ $related->name }}" style="width: 100%; height: 100%; object-fit: cover;">
                                    @else
                                        <div class="detail-related-fallback"><i class="fas fa-leaf"></i></div>
                                    @endif
                                </div>
                            </a>
                            <div class="product-info detail-related-info">
                                <span class="related-bv">BV {{ $related->business_value }}</span>
                                <a href="{{ route('product.show', $related->id) }}" class="text-decoration-none">
                                    <div class="product-title text-dark">{{ $related->name }}</div>
                                </a>
                                <div class="detail-related-price-row">
                                    <div>
                                        <div class="product-price">₹{{ number_format($related->mrp, 2) }}</div>
                                        <div class="product-mrp">₹{{ number_format($related->price, 2) }}</div>
                                    </div>
                                    <button class="add-to-cart" onclick="addToCart({{ $related->id }}, '{{ $related->name }}', {{ $related->price }})">Add</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</section>

<style>
    .product-detail-shell {
        position: relative;
        padding: 44px 0 88px;
        background:
            radial-gradient(circle at top left, rgba(6, 182, 212, 0.12), transparent 28%),
            linear-gradient(180deg, #f6fbfc 0%, #f8f9fa 45%, #eef3f6 100%);
    }

    .product-detail-backdrop {
        position: absolute;
        inset: 0;
        background:
            radial-gradient(circle at 85% 18%, rgba(11, 28, 44, 0.08), transparent 18%),
            radial-gradient(circle at 20% 72%, rgba(6, 182, 212, 0.08), transparent 22%);
        pointer-events: none;
    }

    .product-detail-container {
        position: relative;
        z-index: 1;
    }

    .product-breadcrumb {
        margin-bottom: 28px;
    }

    .product-breadcrumb .breadcrumb {
        gap: 4px;
        padding: 0;
        background: transparent;
    }

    .product-breadcrumb a,
    .product-breadcrumb .breadcrumb-item {
        color: #5b6b77;
        font-size: 13px;
        text-decoration: none;
    }

    .product-breadcrumb .active {
        color: #0b1c2c;
        font-weight: 700;
    }

    .product-hero-grid {
        display: grid;
        grid-template-columns: minmax(0, 1.05fr) minmax(360px, 0.95fr);
        gap: 28px;
        align-items: start;
    }

    .product-gallery-panel,
    .product-summary-card,
    .info-card {
        border: 1px solid rgba(11, 28, 44, 0.08);
        box-shadow: 0 20px 60px rgba(11, 28, 44, 0.08);
    }

    .gallery-stage {
        position: relative;
        padding: 24px;
        border-radius: 28px;
        background: linear-gradient(180deg, #ffffff 0%, #f2f7f8 100%);
    }

    .gallery-stage-top {
        display: flex;
        justify-content: space-between;
        gap: 12px;
        align-items: center;
        margin-bottom: 18px;
    }

    .gallery-chip,
    .gallery-status,
    .summary-kicker,
    .summary-id,
    .related-kicker,
    .related-bv {
        display: inline-flex;
        align-items: center;
        border-radius: 999px;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.04em;
        text-transform: uppercase;
    }

    .gallery-chip,
    .summary-kicker,
    .related-kicker {
        padding: 8px 14px;
        background: rgba(6, 182, 212, 0.12);
        color: #087d92;
    }

    .gallery-status {
        gap: 8px;
        padding: 8px 12px;
        text-transform: none;
        letter-spacing: 0;
    }

    .gallery-status.in-stock {
        background: rgba(14, 159, 110, 0.12);
        color: #11795b;
    }

    .gallery-status.out-stock {
        background: rgba(220, 38, 38, 0.12);
        color: #b42318;
    }

    .gallery-image-frame {
        position: relative;
        min-height: 560px;
        border-radius: 24px;
        padding: 26px;
        background:
            radial-gradient(circle at top, rgba(6, 182, 212, 0.14), transparent 36%),
            #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .gallery-main-image {
        width: 100%;
        height: 100%;
        max-height: 508px;
        object-fit: contain;
        transition: opacity 0.25s ease;
    }

    .gallery-empty-state {
        min-height: 280px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 14px;
        color: #8b99a4;
        font-weight: 600;
    }

    .gallery-empty-state i {
        font-size: 64px;
    }

    .gallery-thumbnails {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(84px, 1fr));
        gap: 14px;
        margin-top: 18px;
    }

    .gallery-thumb {
        border: 1px solid rgba(11, 28, 44, 0.1);
        background: #fff;
        border-radius: 18px;
        overflow: hidden;
        padding: 0;
        aspect-ratio: 1 / 1;
        cursor: pointer;
        transition: transform 0.2s ease, border-color 0.2s ease, box-shadow 0.2s ease;
    }

    .gallery-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .gallery-thumb:hover {
        transform: translateY(-2px);
        border-color: rgba(6, 182, 212, 0.4);
    }

    .active-thumb {
        border-color: #06b6d4;
        box-shadow: 0 10px 24px rgba(6, 182, 212, 0.22);
    }

    .product-summary-panel {
        position: sticky;
        top: 92px;
    }

    .product-summary-card {
        padding: 32px;
        border-radius: 30px;
        background: rgba(255, 255, 255, 0.92);
        backdrop-filter: blur(10px);
    }

    .product-summary-meta {
        display: flex;
        justify-content: space-between;
        gap: 12px;
        align-items: center;
        margin-bottom: 18px;
        flex-wrap: wrap;
    }

    .summary-id {
        padding: 8px 12px;
        background: #edf2f5;
        color: #61707c;
    }

    .product-title-main {
        margin: 0 0 14px;
        font-size: clamp(2rem, 3vw, 3.4rem);
        line-height: 1.02;
        color: #07131f;
    }

    .product-description-main {
        margin: 0;
        color: #556672;
        font-size: 16px;
        line-height: 1.75;
    }

    .product-highlights {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin: 24px 0;
    }

    .highlight-pill {
        min-width: 120px;
        padding: 14px 16px;
        border-radius: 20px;
        background: #f3f7f8;
        border: 1px solid rgba(11, 28, 44, 0.06);
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .highlight-label,
    .price-caption,
    .qty-label,
    .info-label {
        font-size: 11px;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: #7b8b95;
        font-weight: 700;
    }

    .highlight-pill strong {
        font-size: 18px;
        color: #0b1c2c;
    }

    .price-block {
        display: grid;
        grid-template-columns: minmax(0, 1fr) auto;
        gap: 16px;
        padding: 22px;
        border-radius: 24px;
        background: linear-gradient(135deg, #0b1c2c 0%, #14324b 100%);
        color: #fff;
    }

    .price-row {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 12px;
        margin: 10px 0 8px;
    }

    .price-row strong {
        font-size: clamp(2rem, 3vw, 3rem);
        line-height: 1;
    }

    .price-save-badge {
        padding: 7px 12px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.12);
        color: #8cf0ff;
        font-size: 12px;
        font-weight: 700;
    }

    .price-note {
        color: rgba(255, 255, 255, 0.72);
        font-size: 13px;
    }

    .price-secondary {
        min-width: 140px;
        padding-left: 16px;
        border-left: 1px solid rgba(255, 255, 255, 0.14);
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 8px;
    }

    .price-secondary strong {
        color: rgba(255, 255, 255, 0.78);
        font-size: 22px;
        text-decoration: line-through;
    }

    .purchase-panel {
        display: grid;
        grid-template-columns: auto minmax(0, 1fr);
        gap: 16px;
        margin: 22px 0 26px;
        align-items: end;
    }

    .qty-panel {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .qty-btn-group {
        display: inline-flex;
        align-items: center;
        padding: 6px;
        border-radius: 999px;
        background: #f3f7f8;
        border: 1px solid rgba(11, 28, 44, 0.08);
    }

    .qty-action {
        width: 40px;
        height: 40px;
        border: none;
        border-radius: 50%;
        background: #fff;
        color: #0b1c2c;
        font-size: 18px;
        font-weight: 700;
    }

    .qty-btn-group input {
        width: 48px;
        border: none;
        background: transparent;
        text-align: center;
        color: #0b1c2c;
        font-weight: 700;
        outline: none;
    }

    .detail-add-cart-btn {
        min-height: 56px;
        border: none;
        border-radius: 18px;
        background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%);
        color: #fff;
        font-weight: 700;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        box-shadow: 0 18px 28px rgba(6, 182, 212, 0.24);
        transition: transform 0.2s ease, box-shadow 0.2s ease, opacity 0.2s ease;
    }

    .detail-add-cart-btn:hover:not(:disabled) {
        transform: translateY(-2px);
        box-shadow: 0 22px 34px rgba(6, 182, 212, 0.28);
    }

    .detail-add-cart-btn:disabled {
        opacity: 0.6;
        cursor: not-allowed;
        box-shadow: none;
    }

    .assurance-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 14px;
    }

    .assurance-item {
        display: flex;
        gap: 12px;
        padding: 16px;
        border-radius: 20px;
        background: #f5f8fa;
        border: 1px solid rgba(11, 28, 44, 0.05);
    }

    .assurance-item i {
        font-size: 18px;
        color: #0891b2;
        margin-top: 3px;
    }

    .assurance-item strong,
    .related-heading h2 {
        display: block;
        color: #0b1c2c;
    }

    .assurance-item span {
        color: #667784;
        font-size: 13px;
        line-height: 1.5;
    }

    .product-info-strip {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 20px;
        margin-top: 28px;
    }

    .info-card {
        padding: 24px;
        border-radius: 24px;
        background: rgba(255, 255, 255, 0.84);
    }

    .info-card p,
    .detail-list {
        margin: 12px 0 0;
        color: #5a6c78;
        line-height: 1.75;
    }

    .detail-list {
        padding-left: 18px;
    }

    .detail-list li + li {
        margin-top: 6px;
    }

    .related-products-block {
        margin-top: 64px;
        padding-top: 34px;
        border-top: 1px solid rgba(11, 28, 44, 0.08);
    }

    .related-heading {
        display: flex;
        justify-content: space-between;
        align-items: end;
        gap: 20px;
        margin-bottom: 26px;
    }

    .related-heading h2 {
        margin: 8px 0 0;
        font-size: clamp(1.8rem, 2vw, 2.6rem);
    }

    .related-heading h2:after {
        display: none;
    }

    .related-link {
        color: #087d92;
        text-decoration: none;
        font-weight: 700;
    }

    .detail-related-card {
        border-radius: 24px;
    }

    .detail-related-image {
        height: 240px;
    }

    .detail-related-fallback {
        font-size: 54px;
        color: #0891b2;
    }

    .detail-related-info {
        padding: 18px 18px 20px;
    }

    .related-bv {
        padding: 6px 10px;
        margin-bottom: 12px;
        background: rgba(6, 182, 212, 0.12);
        color: #087d92;
    }

    .detail-related-price-row {
        display: flex;
        justify-content: space-between;
        align-items: end;
        gap: 14px;
        margin-top: 14px;
    }

    .detail-related-price-row .add-to-cart {
        width: auto;
        min-width: 88px;
        padding-inline: 18px;
    }

    @media (max-width: 1199px) {
        .product-hero-grid {
            grid-template-columns: 1fr;
        }

        .product-summary-panel {
            position: static;
        }

        .product-info-strip {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 767px) {
        .product-detail-shell {
            padding: 28px 0 64px;
        }

        .gallery-stage,
        .product-summary-card,
        .info-card {
            padding: 20px;
            border-radius: 24px;
        }

        .gallery-image-frame {
            min-height: 340px;
            padding: 16px;
        }

        .product-summary-meta,
        .gallery-stage-top,
        .related-heading,
        .purchase-panel,
        .price-block {
            grid-template-columns: 1fr;
            display: grid;
        }

        .product-summary-meta,
        .gallery-stage-top,
        .related-heading {
            display: flex;
            align-items: flex-start;
            flex-direction: column;
        }

        .price-secondary {
            min-width: 0;
            padding-left: 0;
            border-left: none;
            padding-top: 8px;
            border-top: 1px solid rgba(255, 255, 255, 0.14);
        }

        .purchase-panel {
            gap: 14px;
        }

        .detail-add-cart-btn {
            width: 100%;
        }

        .assurance-grid {
            grid-template-columns: 1fr;
        }

        .gallery-thumbnails {
            grid-template-columns: repeat(4, minmax(0, 1fr));
        }
    }

    @media (max-width: 520px) {
        .gallery-thumbnails {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        .detail-related-price-row {
            flex-direction: column;
            align-items: stretch;
        }

        .detail-related-price-row .add-to-cart {
            width: 100%;
        }
    }
</style>

@push('scripts')
<script>
    function changeMainImage(src, element) {
        const mainImg = document.getElementById('mainProductImage');
        if (!mainImg) return;

        mainImg.style.opacity = '0';
        setTimeout(() => {
            mainImg.src = src;
            mainImg.style.opacity = '1';
        }, 180);

        document.querySelectorAll('.gallery-thumb').forEach((item) => {
            item.classList.remove('active-thumb');
        });
        element.classList.add('active-thumb');
    }

    function updateDetailPageQty(delta) {
        const input = document.getElementById('detailQty');
        let val = parseInt(input.value, 10) + delta;
        if (val < 1) val = 1;
        input.value = val;
    }

    window.addToCartFromDetail = function(id, name, price) {
        const qty = parseInt(document.getElementById('detailQty').value, 10);
        const existing = cart.find(i => i.id === id);

        if (existing) {
            existing.quantity += qty;
        } else {
            cart.push({ id, name, price, quantity: qty });
        }

        saveCart();
        updateCartUI();
        showToast(`${qty} × ${name} added to cart`);
        document.getElementById('detailQty').value = 1;
    }
</script>
@endpush
@endsection
