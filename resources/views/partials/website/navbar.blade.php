<nav class="navbar">
    <div class="container nav-flex">
        <a href="{{ url('/') }}" class="logo">
            <img src="{{ asset('logo.jpeg') }}" alt="Devaneer Logo">
            DEVA<span>NEER</span>
        </a>
        <div class="nav-links">
            <a href="#" class="nav-link" data-tab="shop">Shop</a>
            <a href="#" class="nav-link" data-tab="opportunity">Opportunity</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
        <div class="nav-icons">
            <div class="cart-icon" id="cartIcon">
                <i class="fas fa-shopping-bag"></i>
                <span class="cart-count" id="cartCount">0</span>
            </div>
            <div class="mobile-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </div>
</nav>