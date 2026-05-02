@extends('layouts.website')

@section('title', 'Devaneer | Premium Wellness | Product-Based Earnings')
@section('meta_description', 'Devaneer — Premium wellness products. Product-based direct selling. No ROI. No Binary. Pure earnings from real sales.')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-grid">
                <div>
                    <span class="hero-badge">✦ Product-Based Direct Selling ✦</span>
                    <h1>Earn from<br><span style="color: #06B6D4;">Real Sales</span><br>Not from Joining</h1>
                    {{-- <p>❌ No ROI | ❌ No Binary | ❌ No Passive Income<br>✅ Only Product Sale = Your Earning</p> --}}
                    <div style="display: flex; gap: 16px; flex-wrap: wrap;">
                        <a href="#" class="btn-primary" id="heroShopBtn"><i class="fas fa-store"></i> Shop Products</a>
                        @auth
                            <a href="{{ route('member.dashboard') }}" class="btn-outline"><i class="fas fa-th-large"></i> Dashboard</a>
                        @else
                            <a href="{{ route('member.login') }}" class="btn-outline"><i class="fas fa-sign-in-alt"></i> Member Login</a>
                        @endauth
                    </div>
                    <div class="hero-stats">
                        <div class="stat"><div class="stat-number">20%</div><div style="font-size: 12px;">Retail Profit</div></div>
                        <div class="stat"><div class="stat-number">≤50%</div><div style="font-size: 12px;">Total Payout</div></div>
                        <div class="stat"><div class="stat-number">7</div><div style="font-size: 12px;">Levels Deep</div></div>
                    </div>
                </div>
                <div style="text-align: center;">
                    <div style="background: radial-gradient(circle, rgba(6,182,212,0.15) 0%, transparent 70%); padding: 40px;">
                        <i class="fas fa-certificate" style="font-size: 120px; color: #06B6D4; opacity: 0.8;"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <!-- Tabs -->
        <div style="text-align: center; margin: 40px 0 20px;">
            <div class="tabs">
                <div class="tab active" data-tab="shop">🛍️ Shop Products</div>
                {{-- <div class="tab" data-tab="opportunity">💼 Business Opportunity</div> --}}
            </div>
        </div>

        <!-- Shop Section -->
        <div id="shopSection" class="section-content active">
            <div style="text-align: center; margin-bottom: 48px;">
                <h2>Premium Wellness Collection</h2>
                <p style="color: #495057;">100% natural • Lab tested • GST billing</p>
            </div>
            
            <div class="product-grid">
                @forelse($products as $product)
                    <div class="product-card">
                        <a href="{{ route('product.show', $product->id) }}" class="text-decoration-none">
                            <div class="product-image">
                                @if($product->primaryImage)
                                    <img src="{{ asset($product->primaryImage->image_path) }}" alt="{{ $product->name }}" style="width: 100%; height: 100%; object-fit: cover;">
                                @else
                                    <div style="font-size: 72px;">🌿</div>
                                @endif
                            </div>
                        </a>
                        <div class="product-info">
                            <a href="{{ route('product.show', $product->id) }}" class="text-decoration-none">
                                <div class="product-title text-dark">{{ $product->name }}</div>
                            </a>
                            <div style="font-size: 12px; color: #06B6D4; font-weight: 700; margin-bottom: 5px;">BV: {{ $product->business_value }}</div>
                            <div class="product-price text-muted small">MRP: ₹{{ number_format($product->mrp, 2) }}</div>
                            <div class="product-mrp">₹{{ number_format($product->price, 2) }} <span class="small text-muted" style="font-size: 12px; font-weight: normal;">(DP)</span></div>
                            <button class="add-to-cart" onclick="addToCart({{ $product->id }}, '{{ $product->name }}', {{ $product->price }})">Add to Cart</button>
                        </div>
                    </div>
                @empty
                    <div style="grid-column: 1/-1; text-align: center; padding: 50px;">
                        <i class="fas fa-box-open" style="font-size: 48px; color: #ccc; margin-bottom: 15px;"></i>
                        <p class="text-muted">Coming soon! New wellness products are being added.</p>
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Opportunity Section -->
        <div id="opportunitySection" class="section-content">
            <div style="text-align: center; margin-bottom: 48px;">
                <h2>Your Business, Your Terms</h2>
                <p style="color: #495057;">Join as Distributor • Product Purchase Only • No Joining Fee</p>
            </div>

            <div class="income-card" style="text-align: center; margin-bottom: 40px;">
                <div style="font-size: 14px; color: #06B6D4; text-transform: uppercase; font-weight: 700;">Distributor Activation</div>
                <div style="font-size: 56px; font-weight: 800; color: #0891B2; margin: 16px 0;">₹2,50,000</div>
                <div style="color: #495057;">One-time product purchase — No hidden fees</div>
            </div>

            <h2 style="font-size: 28px;">Income Structure</h2>
            <div class="income-grid">
                <div class="income-card"><div class="income-percent">20%</div><div>Retail Profit<br><span style="font-size: 12px; color: #495057;">Biggest earning source</span></div></div>
                <div class="income-card"><div class="income-percent">10%</div><div>Direct Sponsor Income</div></div>
                <div class="income-card"><div class="income-percent">15%</div><div>Level Income (7 Levels)</div></div>
                <div class="income-card"><div class="income-percent">3%</div><div>Leadership Pool</div></div>
            </div>

            <h2 style="font-size: 28px; margin-top: 48px;">Level Income Breakup</h2>
            <div class="level-grid">
                <div class="level-item"><div class="level-percent">5%</div><div>Level 1</div></div>
                <div class="level-item"><div class="level-percent">3%</div><div>Level 2</div></div>
                <div class="level-item"><div class="level-percent">2%</div><div>Level 3</div></div>
                <div class="level-item"><div class="level-percent">2%</div><div>Level 4</div></div>
                <div class="level-item"><div class="level-percent">1%</div><div>Level 5</div></div>
                <div class="level-item"><div class="level-percent">1%</div><div>Level 6</div></div>
                <div class="level-item"><div class="level-percent">1%</div><div>Level 7</div></div>
            </div>

            <h2 style="font-size: 28px; margin-top: 48px;">Franchise Tiers</h2>
            <div class="franchise-grid">
                <div class="franchise-card"><div style="font-weight: 700;">Distributor</div><div class="franchise-price">₹2.5L+</div><div style="font-size: 13px;">Retail + Level Income</div></div>
                <div class="franchise-card"><div style="font-weight: 700;">Area Distributor</div><div class="franchise-price">₹5L+</div><div style="font-size: 13px;">+2% Extra Margin</div></div>
                <div class="franchise-card"><div style="font-weight: 700;">Super Stockist</div><div class="franchise-price">₹10L</div><div style="font-size: 13px;">+3% Margin</div></div>
                <div class="franchise-card"><div style="font-weight: 700;">Master Franchise</div><div class="franchise-price">₹25L</div><div style="font-size: 13px;">+5% Margin + Area Rights</div></div>
            </div>

            <h2 style="font-size: 28px; margin-top: 48px;">Safety & Compliance</h2>
            <div class="safety-grid">
                <div class="safety-badge"><i class="fas fa-check-circle"></i> Income only on sale</div>
                <div class="safety-badge"><i class="fas fa-check-circle"></i> No ROI commitment</div>
                <div class="safety-badge"><i class="fas fa-check-circle"></i> GST billing</div>
                <div class="safety-badge"><i class="fas fa-check-circle"></i> Monthly activity required</div>
                <div class="safety-badge"><i class="fas fa-check-circle"></i> Max payout control</div>
            </div>

            <div class="income-card" style="margin-top: 48px;">
                <div style="font-weight: 700; margin-bottom: 16px;">Example: One Distributor Joins</div>
                <div style="display: flex; flex-direction: column; gap: 12px; color: #0B1C2C;">
                    <div>📦 Product DP: ₹2,50,000</div>
                    <div>💰 Direct Sponsor (10%): ₹25,000</div>
                    <div>📊 Level Income (15% total): ₹37,500 across 7 levels</div>
                    <div>🏢 Company keeps ~50% for operations & product cost</div>
                </div>
            </div>

            <div style="text-align: center; margin: 48px 0; display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                <a href="{{ route('register') }}" class="btn-primary"><i class="fas fa-user-plus"></i> Become a Distributor</a>
                @auth
                    <a href="{{ route('member.dashboard') }}" class="btn-outline"><i class="fas fa-th-large"></i> Go to Dashboard</a>
                @else
                    <a href="{{ route('member.login') }}" class="btn-outline"><i class="fas fa-sign-in-alt"></i> Existing Member Login</a>
                @endauth
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    let cart = JSON.parse(localStorage.getItem('devaneer_cart')) || [];

    window.addToCart = function(id, name, price) {
        const existing = cart.find(i => i.id === id);
        if(existing) existing.quantity++;
        else cart.push({id, name, price, quantity: 1});
        saveCart();
        updateCartUI();
        showToast(`${name} added to cart`);
    }

    function saveCart() {
        localStorage.setItem('devaneer_cart', JSON.stringify(cart));
    }

    function updateCartUI() {
        const count = cart.reduce((s,i) => s + i.quantity, 0);
        const countEl = document.getElementById("cartCount");
        if(countEl) countEl.innerText = count;
        
        const total = cart.reduce((s,i) => s + (i.price * i.quantity), 0);
        const totalEl = document.getElementById("cartTotal");
        if(totalEl) totalEl.innerText = `₹${total.toLocaleString('en-IN')}`;
        
        const cartItemsDiv = document.getElementById("cartItems");
        if(!cartItemsDiv) return;
        
        if(cart.length === 0) {
            cartItemsDiv.innerHTML = '<div style="text-align: center; color: #495057; padding: 20px;">Cart is empty</div>';
            return;
        }
        cartItemsDiv.innerHTML = cart.map(item => `
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; padding-bottom: 12px; border-bottom: 1px solid rgba(6,182,212,0.1);">
                <div><strong>${item.name}</strong><br><span style="font-size: 12px;">₹${item.price.toLocaleString('en-IN')}</span></div>
                <div style="display: flex; align-items: center; gap: 12px;">
                    <button onclick="updateQty(${item.id}, -1)" style="background:#E9ECEF; border:none; width:28px; height:28px; border-radius:8px; color:#0B1C2C;">-</button>
                    <span>${item.quantity}</span>
                    <button onclick="updateQty(${item.id}, 1)" style="background:#E9ECEF; border:none; width:28px; height:28px; border-radius:8px; color:#0B1C2C;">+</button>
                    <button onclick="removeItem(${item.id})" style="background:#0891B2; border:none; width:28px; height:28px; border-radius:8px; color:white;">✕</button>
                </div>
            </div>
        `).join('');
    }

    window.updateQty = function(id, delta) {
        const item = cart.find(i => i.id === id);
        if(item) {
            item.quantity += delta;
            if(item.quantity <= 0) cart = cart.filter(i => i.id !== id);
            saveCart();
            updateCartUI();
        }
    }

    window.removeItem = function(id) {
        cart = cart.filter(i => i.id !== id);
        saveCart();
        updateCartUI();
    }

    function showToast(msg) {
        const toast = document.getElementById("toast");
        if(!toast) return;
        toast.innerText = msg;
        toast.style.display = "block";
        setTimeout(() => toast.style.display = "none", 3000);
    }

    // Cart sidebar
    const cartIcon = document.getElementById("cartIcon");
    const cartSidebar = document.getElementById("cartSidebar");
    const overlay = document.getElementById("overlay");
    const closeCart = document.getElementById("closeCart");
    
    if(cartIcon) cartIcon.onclick = () => { cartSidebar.classList.add("open"); overlay.classList.add("show"); };
    if(closeCart) closeCart.onclick = () => { cartSidebar.classList.remove("open"); overlay.classList.remove("show"); };
    if(overlay) overlay.onclick = () => { cartSidebar.classList.remove("open"); overlay.classList.remove("show"); };
    
    const checkoutBtn = document.getElementById("checkoutBtn");
    if(checkoutBtn) checkoutBtn.onclick = () => {
        if(cart.length === 0) { showToast("Cart empty"); return; }
        alert("✅ Order placed! Our team will contact you for GST billing details.");
        cart = [];
        saveCart();
        updateCartUI();
        cartSidebar.classList.remove("open");
        overlay.classList.remove("show");
    };

    // Tabs logic
    function switchTab(tabId) {
        const tabs = document.querySelectorAll(".tab");
        if(tabs.length === 0) return;
        
        tabs.forEach(t => t.classList.remove("active"));
        const activeTab = document.querySelector(`.tab[data-tab="${tabId}"]`);
        if (activeTab) activeTab.classList.add("active");
        
        const shop = document.getElementById("shopSection");
        const opp = document.getElementById("opportunitySection");
        
        if(shop && opp) {
            if(tabId === "shop") {
                shop.classList.add("active");
                opp.classList.remove("active");
            } else {
                shop.classList.remove("active");
                opp.classList.add("active");
            }
        }
    }

    document.querySelectorAll(".tab").forEach(tab => {
        tab.onclick = () => switchTab(tab.dataset.tab);
    });

    document.querySelectorAll(".nav-link[data-tab]").forEach(link => {
        link.onclick = (e) => {
            e.preventDefault();
            switchTab(link.dataset.tab);
            const tabsEl = document.querySelector('.tabs');
            if(tabsEl) window.scrollTo({ top: tabsEl.offsetTop - 100, behavior: 'smooth' });
        };
    });

    const heroShopBtn = document.getElementById("heroShopBtn");
    if(heroShopBtn) heroShopBtn.onclick = (e) => { 
        e.preventDefault(); 
        switchTab("shop"); 
        const tabsEl = document.querySelector('.tabs');
        if(tabsEl) window.scrollTo({ top: tabsEl.offsetTop - 100, behavior: 'smooth' }); 
    };
    
    // Initialize UI
    updateCartUI();
</script>
@endpush
