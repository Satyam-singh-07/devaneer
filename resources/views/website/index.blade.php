@extends('layouts.website')

@section('title', 'EliteDirect | Premium Wellness | Product-Based Earnings')
@section('meta_description', 'EliteDirect — Premium wellness products. Product-based direct selling. No ROI. No Binary. Pure earnings from real sales.')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-grid">
                <div>
                    <span class="hero-badge">✦ Product-Based Direct Selling ✦</span>
                    <h1>Earn from<br><span style="color: #C47A3A;">Real Sales</span><br>Not from Joining</h1>
                    <p>❌ No ROI | ❌ No Binary | ❌ No Passive Income<br>✅ Only Product Sale = Your Earning</p>
                    <div style="display: flex; gap: 16px; flex-wrap: wrap;">
                        <a href="#" class="btn-primary" id="heroShopBtn"><i class="fas fa-store"></i> Shop Products</a>
                        <a href="#" class="btn-outline" id="heroBizBtn"><i class="fas fa-chart-line"></i> View Plan</a>
                    </div>
                    <div class="hero-stats">
                        <div class="stat"><div class="stat-number">20%</div><div style="font-size: 12px;">Retail Profit</div></div>
                        <div class="stat"><div class="stat-number">≤50%</div><div style="font-size: 12px;">Total Payout</div></div>
                        <div class="stat"><div class="stat-number">7</div><div style="font-size: 12px;">Levels Deep</div></div>
                    </div>
                </div>
                <div style="text-align: center;">
                    <div style="background: radial-gradient(circle, rgba(196,122,58,0.15) 0%, transparent 70%); padding: 40px;">
                        <i class="fas fa-certificate" style="font-size: 120px; color: #C47A3A; opacity: 0.8;"></i>
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
                <div class="tab" data-tab="opportunity">💼 Business Opportunity</div>
            </div>
        </div>

        <!-- Shop Section -->
        <div id="shopSection" class="section-content active">
            <div style="text-align: center; margin-bottom: 48px;">
                <h2>Premium Wellness Collection</h2>
                <p style="color: #C5C7C9;">100% natural • Lab tested • GST billing</p>
            </div>
            <div class="product-grid" id="productGrid"></div>
        </div>

        <!-- Opportunity Section -->
        <div id="opportunitySection" class="section-content">
            <div style="text-align: center; margin-bottom: 48px;">
                <h2>Your Business, Your Terms</h2>
                <p style="color: #C5C7C9;">Join as Distributor • Product Purchase Only • No Joining Fee</p>
            </div>

            <!-- Entry Card -->
            <div class="income-card" style="text-align: center; margin-bottom: 40px;">
                <div style="font-size: 14px; color: #C47A3A; text-transform: uppercase;">Distributor Activation</div>
                <div style="font-size: 56px; font-weight: 700; color: #C47A3A; margin: 16px 0;">₹2,50,000</div>
                <div style="color: #C5C7C9;">One-time product purchase — No hidden fees</div>
            </div>

            <!-- Income Structure -->
            <h2 style="font-size: 28px;">Income Structure</h2>
            <div class="income-grid">
                <div class="income-card"><div class="income-percent">20%</div><div>Retail Profit<br><span style="font-size: 12px; color: #C5C7C9;">Biggest earning source</span></div></div>
                <div class="income-card"><div class="income-percent">10%</div><div>Direct Sponsor Income</div></div>
                <div class="income-card"><div class="income-percent">15%</div><div>Level Income (7 Levels)</div></div>
                <div class="income-card"><div class="income-percent">3%</div><div>Leadership Pool</div></div>
            </div>

            <!-- Level Breakup -->
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

            <!-- Franchise Tiers -->
            <h2 style="font-size: 28px; margin-top: 48px;">Franchise Tiers</h2>
            <div class="franchise-grid">
                <div class="franchise-card"><div style="font-weight: 700;">Distributor</div><div class="franchise-price">₹2.5L+</div><div style="font-size: 13px;">Retail + Level Income</div></div>
                <div class="franchise-card"><div style="font-weight: 700;">Area Distributor</div><div class="franchise-price">₹5L+</div><div style="font-size: 13px;">+2% Extra Margin</div></div>
                <div class="franchise-card"><div style="font-weight: 700;">Super Stockist</div><div class="franchise-price">₹10L</div><div style="font-size: 13px;">+3% Margin</div></div>
                <div class="franchise-card"><div style="font-weight: 700;">Master Franchise</div><div class="franchise-price">₹25L</div><div style="font-size: 13px;">+5% Margin + Area Rights</div></div>
            </div>

            <!-- Safety Rules -->
            <h2 style="font-size: 28px; margin-top: 48px;">Safety & Compliance</h2>
            <div class="safety-grid">
                <div class="safety-badge"><i class="fas fa-check-circle"></i> Income only on sale</div>
                <div class="safety-badge"><i class="fas fa-check-circle"></i> No ROI commitment</div>
                <div class="safety-badge"><i class="fas fa-check-circle"></i> GST billing</div>
                <div class="safety-badge"><i class="fas fa-check-circle"></i> Monthly activity required</div>
                <div class="safety-badge"><i class="fas fa-check-circle"></i> Max payout control</div>
            </div>

            <!-- Example -->
            <div class="income-card" style="margin-top: 48px;">
                <div style="font-weight: 700; margin-bottom: 16px;">Example: One Distributor Joins</div>
                <div style="display: flex; flex-direction: column; gap: 12px;">
                    <div>📦 Product DP: ₹2,50,000</div>
                    <div>💰 Direct Sponsor (10%): ₹25,000</div>
                    <div>📊 Level Income (15% total): ₹37,500 across 7 levels</div>
                    <div>🏢 Company keeps ~50% for operations & product cost</div>
                </div>
            </div>

            <div style="text-align: center; margin: 48px 0;">
                <a href="#" class="btn-primary" id="joinNowBtn"><i class="fas fa-user-plus"></i> Become a Distributor</a>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    // Products
    const products = [
        { id: 1, name: "Immunity Gold", dp: 2500, mrp: 3250, image: "💊" },
        { id: 2, name: "Plant Protein", dp: 1800, mrp: 2340, image: "🥤" },
        { id: 3, name: "Omega 3", dp: 1200, mrp: 1560, image: "🐟" },
        { id: 4, name: "Turmeric Elixir", dp: 800, mrp: 1040, image: "🌿" },
        { id: 5, name: "Sleep Gummies", dp: 950, mrp: 1235, image: "😴" },
        { id: 6, name: "Collagen Plus", dp: 2200, mrp: 2860, image: "✨" },
        { id: 7, name: "Apple Cider", dp: 600, mrp: 780, image: "🍎" },
        { id: 8, name: "Multivitamin", dp: 750, mrp: 975, image: "💪" }
    ];

    let cart = [];

    function renderProducts() {
        const grid = document.getElementById("productGrid");
        if (!grid) return;
        grid.innerHTML = products.map(p => `
            <div class="product-card">
                <div class="product-image">${p.image}</div>
                <div class="product-info">
                    <div class="product-title">${p.name}</div>
                    <div class="product-price">DP: ₹${p.dp}</div>
                    <div class="product-mrp">₹${p.mrp}</div>
                    <button class="add-to-cart" onclick="addToCart(${p.id})">Add to Cart</button>
                </div>
            </div>
        `).join('');
    }

    window.addToCart = function(id) {
        const product = products.find(p => p.id === id);
        const existing = cart.find(i => i.id === id);
        if(existing) existing.quantity++;
        else cart.push({...product, quantity: 1});
        updateCartUI();
        showToast(`${product.name} added`);
    }

    function updateCartUI() {
        const count = cart.reduce((s,i) => s + i.quantity, 0);
        document.getElementById("cartCount").innerText = count;
        const total = cart.reduce((s,i) => s + (i.mrp * i.quantity), 0);
        document.getElementById("cartTotal").innerText = `₹${total}`;
        
        const cartItemsDiv = document.getElementById("cartItems");
        if(cart.length === 0) {
            cartItemsDiv.innerHTML = '<div style="text-align: center; color: #C5C7C9;">Cart is empty</div>';
            return;
        }
        cartItemsDiv.innerHTML = cart.map(item => `
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; padding-bottom: 12px; border-bottom: 1px solid rgba(196,122,58,0.1);">
                <div><strong>${item.name}</strong><br><span style="font-size: 12px;">₹${item.mrp}</span></div>
                <div style="display: flex; align-items: center; gap: 12px;">
                    <button onclick="updateQty(${item.id}, -1)" style="background:#3A3F45; border:none; width:28px; height:28px; border-radius:8px; color:white;">-</button>
                    <span>${item.quantity}</span>
                    <button onclick="updateQty(${item.id}, 1)" style="background:#3A3F45; border:none; width:28px; height:28px; border-radius:8px; color:white;">+</button>
                    <button onclick="removeItem(${item.id})" style="background:#8A4F2A; border:none; width:28px; height:28px; border-radius:8px;">✕</button>
                </div>
            </div>
        `).join('');
    }

    window.updateQty = function(id, delta) {
        const item = cart.find(i => i.id === id);
        if(item) {
            item.quantity += delta;
            if(item.quantity <= 0) cart = cart.filter(i => i.id !== id);
            updateCartUI();
        }
    }

    window.removeItem = function(id) {
        cart = cart.filter(i => i.id !== id);
        updateCartUI();
    }

    function showToast(msg) {
        const toast = document.getElementById("toast");
        toast.innerText = msg;
        toast.style.display = "block";
        setTimeout(() => toast.style.display = "none", 2000);
    }

    // Cart sidebar
    const cartIcon = document.getElementById("cartIcon");
    const cartSidebar = document.getElementById("cartSidebar");
    const overlay = document.getElementById("overlay");
    cartIcon.onclick = () => { cartSidebar.classList.add("open"); overlay.classList.add("show"); };
    document.getElementById("closeCart").onclick = () => { cartSidebar.classList.remove("open"); overlay.classList.remove("show"); };
    overlay.onclick = () => { cartSidebar.classList.remove("open"); overlay.classList.remove("show"); };
    document.getElementById("checkoutBtn").onclick = () => {
        if(cart.length === 0) { showToast("Cart empty"); return; }
        alert("✅ Order placed! GST invoice will be sent.");
        cart = [];
        updateCartUI();
        cartSidebar.classList.remove("open");
        overlay.classList.remove("show");
    };

    // Tabs
    const tabs = document.querySelectorAll(".tab");
    const shopSection = document.getElementById("shopSection");
    const oppSection = document.getElementById("opportunitySection");
    const navLinks = document.querySelectorAll(".nav-link");

    function switchTab(tabId) {
        tabs.forEach(t => t.classList.remove("active"));
        const activeTab = document.querySelector(`.tab[data-tab="${tabId}"]`);
        if (activeTab) activeTab.classList.add("active");
        
        if(tabId === "shop") {
            shopSection.classList.add("active");
            oppSection.classList.remove("active");
        } else {
            shopSection.classList.remove("active");
            oppSection.classList.add("active");
        }
    }

    tabs.forEach(tab => {
        tab.onclick = () => switchTab(tab.dataset.tab);
    });
    navLinks.forEach(link => {
        link.onclick = (e) => {
            e.preventDefault();
            switchTab(link.dataset.tab);
        };
    });

    document.getElementById("heroShopBtn").onclick = (e) => { e.preventDefault(); switchTab("shop"); };
    document.getElementById("heroBizBtn").onclick = (e) => { e.preventDefault(); switchTab("opportunity"); };
    document.getElementById("joinNowBtn").onclick = (e) => {
        e.preventDefault();
        alert("📞 Become a Distributor\nInvestment: ₹2,50,000 (Product Purchase)\nContact: 1800-XXX-XXXX");
    };

    renderProducts();
</script>
@endpush