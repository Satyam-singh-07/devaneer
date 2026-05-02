<nav class="navbar">
    <div class="container nav-flex">
        <a href="{{ url('/') }}" class="logo">
            <img src="{{ asset('logo.jpeg') }}" alt="Devaneer Logo">
            DEVA<span>NEER</span>
        </a>
        <div class="nav-links">
            <a href="{{ url('/') }}" class="nav-link" data-tab="shop">Shop</a>
            <a href="{{ url('/') }}#opportunity" class="nav-link" data-tab="opportunity">Opportunity</a>
            <a href="{{ route('register') }}" class="nav-link">Join Us</a>
            @auth
                <a href="{{ route('member.dashboard') }}" class="nav-link">Dashboard</a>
            @else
                <a href="{{ route('member.login') }}" class="nav-link">Login</a>
            @endauth
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