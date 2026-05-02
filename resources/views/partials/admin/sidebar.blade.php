<aside class="admin-sidebar shadow-sm">
    <div class="sidebar-header border-bottom p-4 text-center">
        <img src="{{ asset('logo.jpeg') }}" alt="Devaneer Logo" class="img-fluid rounded-3 mb-2" style="max-height: 80px;">
        <h5 class="mb-0 fw-bold text-white">DEVANEER Admin</h5>
    </div>
    
    <div class="sidebar-content py-3">
        <ul class="nav flex-column px-3">
            <li class="nav-item mb-2">
                <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="bi bi-speedometer2 me-2"></i> Dashboard
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('admin.products.index') }}" class="nav-link {{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
                    <i class="bi bi-box-seam me-2"></i> Products
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('admin.members.index') }}" class="nav-link {{ request()->routeIs('admin.members.*') ? 'active' : '' }}">
                    <i class="bi bi-people me-2"></i> Members
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="#" class="nav-link text-white-50">
                    <i class="bi bi-cart3 me-2"></i> Orders
                </a>
            </li>
            <li class="nav-item mt-4 border-top pt-3">
                <a href="{{ url('/') }}" class="nav-link text-info" target="_blank">
                    <i class="bi bi-globe me-2"></i> View Website
                </a>
            </li>
            <li class="nav-item mt-2">
                <form action="{{ route('admin.logout') }}" method="POST" class="d-grid px-2">
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
    .admin-sidebar {
        width: 280px;
        background: #0b1c2c;
        color: white;
        min-height: 100vh;
        position: sticky;
        top: 0;
    }
    .nav-link {
        color: #c5c7c9;
        border-radius: 8px;
        padding: 10px 15px;
        transition: all 0.3s;
    }
    .nav-link:hover {
        background: rgba(255, 255, 255, 0.1);
        color: #fff;
    }
    .nav-link.active {
        background: #0d6efd;
        color: #fff;
    }
    .bi {
        vertical-align: middle;
    }
</style>
