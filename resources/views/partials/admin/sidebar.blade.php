<aside class="admin-sidebar shadow-sm">
    <div class="sidebar-header border-bottom p-4 text-center">
        <a href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('logo.jpeg') }}" alt="Devaneer Logo" class="img-fluid rounded-3 mb-2" style="max-height: 80px;">
        </a>
        <h5 class="mb-0 fw-bold text-white">DEVANEER Admin</h5>
    </div>
    
    <div class="sidebar-content overflow-auto" style="height: calc(100vh - 160px);">
        <ul class="nav flex-column px-2 mt-3" id="adminSidebarMenu">
            <li class="nav-item mb-1">
                <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="fa fa-home me-2"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item mb-1">
                <a href="#memberMgmtSubmenu" class="nav-link text-white d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="memberMgmtSubmenu">
                    <span><i class="fa fa-users me-2"></i> Member Management</span>
                    <i class="bi bi-chevron-down small"></i>
                </a>
                <ul class="collapse list-unstyled ps-4" id="memberMgmtSubmenu" data-bs-parent="#adminSidebarMenu">
                    <li><a href="{{ route('admin.members.index') }}" class="nav-link text-white-50 py-1 small {{ request()->routeIs('admin.members.*') ? 'active' : '' }}">Member List</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Password Tracker</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Official Announcement</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Update Member Profile</a></li>
                </ul>
            </li>

            <li class="nav-item mb-1">
                <a href="#packageMgmtSubmenu" class="nav-link text-white d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="packageMgmtSubmenu">
                    <span><i class="fa fa-box me-2"></i> Package Management</span>
                    <i class="bi bi-chevron-down small"></i>
                </a>
                <ul class="collapse list-unstyled ps-4" id="packageMgmtSubmenu" data-bs-parent="#adminSidebarMenu">
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Manage Package</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Manage Level Commission</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Manage Repurchase Level Commission</a></li>
                </ul>
            </li>

            <li class="nav-item mb-1">
                <a href="#fundRequestSubmenu" class="nav-link text-white d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="fundRequestSubmenu">
                    <span><i class="fa fa-wallet me-2"></i> User Fund Request Mgmt</span>
                    <i class="bi bi-chevron-down small"></i>
                </a>
                <ul class="collapse list-unstyled ps-4" id="fundRequestSubmenu" data-bs-parent="#adminSidebarMenu">
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Pending Fund Request</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Approved Fund Request</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Cancel Fund Request</a></li>
                </ul>
            </li>

            <li class="nav-item mb-1">
                <a href="#reportsMgmtSubmenu" class="nav-link text-white d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="reportsMgmtSubmenu">
                    <span><i class="fa fa-file-alt me-2"></i> Reports Management</span>
                    <i class="bi bi-chevron-down small"></i>
                </a>
                <ul class="collapse list-unstyled ps-4" id="reportsMgmtSubmenu" data-bs-parent="#adminSidebarMenu">
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Level Income</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Repurchase Level Income</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">TDS Reports</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Award Achievers</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Rewards Income Report</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Rewards Gift Report</a></li>
                </ul>
            </li>

            <li class="nav-item mb-1">
                <a href="#kycMgmtSubmenu" class="nav-link text-white d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="kycMgmtSubmenu">
                    <span><i class="fa fa-id-card me-2"></i> KYC Management</span>
                    <i class="bi bi-chevron-down small"></i>
                </a>
                <ul class="collapse list-unstyled ps-4" id="kycMgmtSubmenu" data-bs-parent="#adminSidebarMenu">
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Approved Pan Proof List</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Approved Bank Proof List</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Approved Id Proof List</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Cancelled KYC List</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Under Process KYC List</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Pending KYC List</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">KYC Completed List</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Reset Kyc</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Uploaded KYC List</a></li>
                </ul>
            </li>

            <li class="nav-item mb-1">
                <a href="#walletMgmtSubmenu" class="nav-link text-white d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="walletMgmtSubmenu">
                    <span><i class="fa fa-th-list me-2"></i> Shopping Wallet Management</span>
                    <i class="bi bi-chevron-down small"></i>
                </a>
                <ul class="collapse list-unstyled ps-4" id="walletMgmtSubmenu" data-bs-parent="#adminSidebarMenu">
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Manage Shopping Wallet</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">All Transaction History</a></li>
                </ul>
            </li>

            <li class="nav-item mb-1">
                <a href="#settingsMgmtSubmenu" class="nav-link text-white d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="settingsMgmtSubmenu">
                    <span><i class="fa fa-cog me-2"></i> Settings Management</span>
                    <i class="bi bi-chevron-down small"></i>
                </a>
                <ul class="collapse list-unstyled ps-4" id="settingsMgmtSubmenu" data-bs-parent="#adminSidebarMenu">
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Change Password</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Change Profile Photo</a></li>
                </ul>
            </li>

            <li class="nav-item mb-1">
                <a href="#payoutMgmtSubmenu" class="nav-link text-white d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="payoutMgmtSubmenu">
                    <span><i class="fa fa-money-bill-wave me-2"></i> User Payout Management</span>
                    <i class="bi bi-chevron-down small"></i>
                </a>
                <ul class="collapse list-unstyled ps-4" id="payoutMgmtSubmenu" data-bs-parent="#adminSidebarMenu">
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Approved Payout</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Close Payout</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Unapproved Payout</a></li>
                </ul>
            </li>

            <li class="nav-item mb-1">
                <a href="#epinMgmtSubmenu" class="nav-link text-white d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="epinMgmtSubmenu">
                    <span><i class="fa fa-tasks me-2"></i> E Pins Manage</span>
                    <i class="bi bi-chevron-down small"></i>
                </a>
                <ul class="collapse list-unstyled ps-4" id="epinMgmtSubmenu" data-bs-parent="#adminSidebarMenu">
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Fresh E Pin Report</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Used E Pin Report</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Create E Pin</a></li>
                </ul>
            </li>

            <li class="nav-item mb-1">
                <a href="#queryMgmtSubmenu" class="nav-link text-white d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="queryMgmtSubmenu">
                    <span><i class="fa fa-question-circle me-2"></i> Query Ticket Management</span>
                    <i class="bi bi-chevron-down small"></i>
                </a>
                <ul class="collapse list-unstyled ps-4" id="queryMgmtSubmenu" data-bs-parent="#adminSidebarMenu">
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Open Ticket Manage</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Close Ticket Manage</a></li>
                </ul>
            </li>

            <li class="nav-item mb-1">
                <a href="#orderMgmtSubmenu" class="nav-link text-white d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="orderMgmtSubmenu">
                    <span><i class="fa fa-shopping-cart me-2"></i> Order Management</span>
                    <i class="bi bi-chevron-down small"></i>
                </a>
                <ul class="collapse list-unstyled ps-4" id="orderMgmtSubmenu" data-bs-parent="#adminSidebarMenu">
                    <li><a href="#" class="nav-link text-white-50 py-1 small">New Orders List</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Processed Order List</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Delivered Order List</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Cancelled Orders List</a></li>
                </ul>
            </li>

            <li class="nav-item mb-1">
                <a href="#eshopMgmtSubmenu" class="nav-link text-white d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="eshopMgmtSubmenu">
                    <span><i class="fa fa-store me-2"></i> E-Shop Management</span>
                    <i class="bi bi-chevron-down small"></i>
                </a>
                <ul class="collapse list-unstyled ps-4" id="eshopMgmtSubmenu" data-bs-parent="#adminSidebarMenu">
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Manage Size</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Manage Category</a></li>
                    <li><a href="{{ route('admin.products.index') }}" class="nav-link text-white-50 py-1 small {{ request()->routeIs('admin.products.*') ? 'active' : '' }}">Manage Products</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Manage Product Stock</a></li>
                </ul>
            </li>

            <li class="nav-item mb-1">
                <a href="#bankMgmtSubmenu" class="nav-link text-white d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="bankMgmtSubmenu">
                    <span><i class="fa fa-university me-2"></i> Admin Bank Management</span>
                    <i class="bi bi-chevron-down small"></i>
                </a>
                <ul class="collapse list-unstyled ps-4" id="bankMgmtSubmenu" data-bs-parent="#adminSidebarMenu">
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Manage Bank Details</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Manage UPI Details</a></li>
                </ul>
            </li>

            <li class="nav-item mb-1">
                <a href="#" class="nav-link text-white">
                    <i class="fa fa-user-shield me-2"></i> <span>Sub Admin Management</span>
                </a>
            </li>

            <li class="nav-item mt-4 border-top pt-3">
                <a href="{{ url('/') }}" class="nav-link text-info" target="_blank">
                    <i class="bi bi-globe me-2"></i> View Website
                </a>
            </li>

            <li class="nav-item mt-2 mb-4">
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
        background: #0B1C2C;
        color: white;
        min-height: 100vh;
        position: sticky;
        top: 0;
    }
    .admin-sidebar .nav-link {
        color: #94a3b8;
        border-radius: 8px;
        padding: 10px 15px;
        transition: all 0.3s;
        font-weight: 500;
        font-size: 0.9rem;
    }
    .admin-sidebar .nav-link:hover {
        background: rgba(255, 255, 255, 0.05);
        color: #fff !important;
    }
    .admin-sidebar .nav-link.active {
        background: #0d6efd;
        color: #fff !important;
    }
    .admin-sidebar .nav-link[data-bs-toggle=\"collapse\"] .bi-chevron-down {
        transition: transform 0.3s;
    }
    .admin-sidebar .nav-link[data-bs-toggle=\"collapse\"]:not(.collapsed) .bi-chevron-down {
        transform: rotate(180deg);
    }
    .admin-sidebar .sidebar-content::-webkit-scrollbar {
        width: 5px;
    }
    .admin-sidebar .sidebar-content::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.05);
    }
    .admin-sidebar .sidebar-content::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
    }
</style>
