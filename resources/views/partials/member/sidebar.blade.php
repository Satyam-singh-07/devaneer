<aside class="member-sidebar shadow-sm">
    <div class="sidebar-header border-bottom p-4 text-center">
        <a href="{{ url('/') }}">
            <img src="{{ asset('logo.jpeg') }}" alt="Devaneer Logo" class="img-fluid rounded-3 mb-2" style="max-height: 80px;">
        </a>
        <h5 class="mb-0 fw-bold text-white">DEVANEER</h5>
    </div>
    
    <div class="sidebar-content py-3">
        <ul class="nav flex-column px-3">
            <li class="nav-item mb-2">
                <a href="{{ route('member.dashboard') }}" class="nav-link {{ request()->routeIs('member.dashboard') ? 'active' : '' }}">
                    <i class="bi bi-speedometer2 me-2"></i> Dashboard
                </a>
            </li>
            {{-- <li class="nav-item mb-2">
                <a href="#" class="nav-link text-white-50">
                    <i class="bi bi-diagram-3 me-2"></i> My Genealogy
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="#" class="nav-link text-white-50">
                    <i class="bi bi-people me-2"></i> Direct Referrals
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="#" class="nav-link text-white-50">
                    <i class="bi bi-wallet2 me-2"></i> My Income
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="#" class="nav-link text-white-50">
                    <i class="bi bi-cart3 me-2"></i> My Orders
                </a>
            </li> --}}
            <li class="nav-item mt-4 border-top pt-3">
                <a href="{{ url('/') }}" class="nav-link text-info">
                    <i class="bi bi-shop me-2"></i> Go to Shop
                </a>
            </li>
            <li class="nav-item mt-2">
                <form action="{{ route('logout') }}" method="POST" class="d-grid px-2">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger btn-sm text-start">
                        <i class="bi bi-box-arrow-right me-2"></i> Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>
</aside>

<style>
    .member-sidebar {
        width: 260px;
        background: #0B1C2C;
        color: white;
        min-height: 100vh;
        position: sticky;
        top: 0;
    }
    .member-sidebar .nav-link {
        color: #94a3b8;
        border-radius: 8px;
        padding: 12px 15px;
        transition: all 0.3s;
        font-weight: 500;
    }
    .member-sidebar .nav-link:hover {
        background: rgba(255, 255, 255, 0.05);
        color: #fff;
    }
    .member-sidebar .nav-link.active {
        background: #06B6D4;
        color: #fff;
    }
    .member-sidebar .bi {
        font-size: 1.1rem;
    }
</style>
