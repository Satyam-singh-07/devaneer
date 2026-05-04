<aside class="member-sidebar shadow-sm">
    <div class="sidebar-header border-bottom p-4 text-center">
        <a href="{{ url('/') }}">
            <img src="{{ asset('logo.jpeg') }}" alt="Devaneer Logo" class="img-fluid rounded-3 mb-2" style="max-height: 80px;">
        </a>
        <h5 class="mb-0 fw-bold text-white">DEVANEER</h5>
    </div>
    
    <div class="sidebar-content overflow-auto" style="height: calc(100vh - 160px);">
        <ul class="nav flex-column px-2 mt-3" id="sidebarMenu">
            <li class="nav-item mb-1">
                <a href="#" class="nav-link text-white">
                    <i class="fa fa-user me-2"></i> <span>New Registration</span>
                </a>
            </li>
            
            <li class="nav-item mb-1">
                <a href="{{ route('member.dashboard') }}" class="nav-link {{ request()->routeIs('member.dashboard') ? 'active' : '' }}">
                    <i class="fa fa-tachometer-alt me-2"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item mb-1">
                <a href="#profileSubmenu" class="nav-link text-white d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="profileSubmenu">
                    <span><i class="fa fa-laptop me-2"></i> My Profile</span>
                    <i class="bi bi-chevron-down small"></i>
                </a>
                <ul class="collapse list-unstyled ps-4" id="profileSubmenu" data-bs-parent="#sidebarMenu">
                    <li><a href="#" class="nav-link text-white-50 py-1 small">ID card</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Update Profile</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Update Nominee</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Update Password</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Update KYC</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">TDS Form</a></li>
                </ul>
            </li>

            <li class="nav-item mb-1">
                <a href="#packageSubmenu" class="nav-link text-white d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="packageSubmenu">
                    <span><i class="fa fa-box me-2"></i> Buy Package</span>
                    <i class="bi bi-chevron-down small"></i>
                </a>
                <ul class="collapse list-unstyled ps-4" id="packageSubmenu" data-bs-parent="#sidebarMenu">
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Activation Package</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Package History</a></li>
                </ul>
            </li>

            <li class="nav-item mb-1">
                <a href="#" class="nav-link text-white">
                    <i class="fa fa-shopping-cart me-2"></i> <span>E-Shop</span>
                </a>
            </li>

            <li class="nav-item mb-1">
                <a href="#rewardSubmenu" class="nav-link text-white d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="rewardSubmenu">
                    <span><i class="fa fa-award me-2"></i> Award & Reward</span>
                    <i class="bi bi-chevron-down small"></i>
                </a>
                <ul class="collapse list-unstyled ps-4" id="rewardSubmenu" data-bs-parent="#sidebarMenu">
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Rank and Reward</a></li>
                </ul>
            </li>

            <li class="nav-item mb-1">
                <a href="#genealogySubmenu" class="nav-link text-white d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="genealogySubmenu">
                    <span><i class="fa fa-sitemap me-2"></i> Genealogy</span>
                    <i class="bi bi-chevron-down small"></i>
                </a>
                <ul class="collapse list-unstyled ps-4" id="genealogySubmenu" data-bs-parent="#sidebarMenu">
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Direct Sponsor List</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">My Team Report</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Genealogy Tree</a></li>
                </ul>
            </li>

            <li class="nav-item mb-1">
                <a href="#" class="nav-link text-white">
                    <i class="fa fa-bullhorn me-2"></i> <span>Official Announcement</span>
                </a>
            </li>

            <li class="nav-item mb-1">
                <a href="#" class="nav-link text-white">
                    <i class="fa fa-credit-card me-2"></i> <span>Payout Report</span>
                </a>
            </li>

            <li class="nav-item mb-1">
                <a href="#walletSubmenu" class="nav-link text-white d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="walletSubmenu">
                    <span><i class="fa fa-wallet me-2"></i> My Wallet</span>
                    <i class="bi bi-chevron-down small"></i>
                </a>
                <ul class="collapse list-unstyled ps-4" id="walletSubmenu" data-bs-parent="#sidebarMenu">
                    <li><a href="#" class="nav-link text-white-50 py-1 small">My Shopping Wallet</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Add Fund Request[Bank]</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Add Fund Request[UPI]</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Fund Request Report</a></li>
                </ul>
            </li>

            <li class="nav-item mb-1">
                <a href="#earningSubmenu" class="nav-link text-white d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="earningSubmenu">
                    <span><i class="fa fa-file-invoice-dollar me-2"></i> Earning Reports</span>
                    <i class="bi bi-chevron-down small"></i>
                </a>
                <ul class="collapse list-unstyled ps-4" id="earningSubmenu" data-bs-parent="#sidebarMenu">
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Level Income Report</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Repurchase Level Income</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Reward Income</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Reward Gift</a></li>
                </ul>
            </li>

            <li class="nav-item mb-1">
                <a href="#invoiceSubmenu" class="nav-link text-white d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="invoiceSubmenu">
                    <span><i class="fa fa-file-alt me-2"></i> Invoice Details</span>
                    <i class="bi bi-chevron-down small"></i>
                </a>
                <ul class="collapse list-unstyled ps-4" id="invoiceSubmenu" data-bs-parent="#sidebarMenu">
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Invoice Details</a></li>
                </ul>
            </li>

            <li class="nav-item mb-1">
                <a href="#eventSubmenu" class="nav-link text-white d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="eventSubmenu">
                    <span><i class="fa fa-calendar-alt me-2"></i> Event & Update</span>
                    <i class="bi bi-chevron-down small"></i>
                </a>
                <ul class="collapse list-unstyled ps-4" id="eventSubmenu" data-bs-parent="#sidebarMenu">
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Event & Update</a></li>
                </ul>
            </li>

            <li class="nav-item mb-1">
                <a href="#referralSubmenu" class="nav-link text-white d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="referralSubmenu">
                    <span><i class="fa fa-link me-2"></i> Referral Link</span>
                    <i class="bi bi-chevron-down small"></i>
                </a>
                <ul class="collapse list-unstyled ps-4" id="referralSubmenu" data-bs-parent="#sidebarMenu">
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Referrals Link</a></li>
                </ul>
            </li>

            <li class="nav-item mb-1">
                <a href="#grievanceSubmenu" class="nav-link text-white d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="grievanceSubmenu">
                    <span><i class="fa fa-headset me-2"></i> Grievance / Request</span>
                    <i class="bi bi-chevron-down small"></i>
                </a>
                <ul class="collapse list-unstyled ps-4" id="grievanceSubmenu" data-bs-parent="#sidebarMenu">
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Open Ticket</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">View Response</a></li>
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Closed Ticket</a></li>
                </ul>
            </li>

            <li class="nav-item mb-1">
                <a href="#policySubmenu" class="nav-link text-white d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="policySubmenu">
                    <span><i class="fa fa-shield-alt me-2"></i> Policy Section</span>
                    <i class="bi bi-chevron-down small"></i>
                </a>
                <ul class="collapse list-unstyled ps-4" id="policySubmenu" data-bs-parent="#sidebarMenu">
                    <li><a href="#" class="nav-link text-white-50 py-1 small">Terms & Conditions</a></li>
                </ul>
            </li>

            <li class="nav-item mt-4 border-top pt-3">
                <a href="{{ url('/') }}" class="nav-link text-info">
                    <i class="bi bi-shop me-2"></i> Go to Shop
                </a>
            </li>

            <li class="nav-item mt-2 mb-4">
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
        padding: 10px 15px;
        transition: all 0.3s;
        font-weight: 500;
        font-size: 0.9rem;
    }
    .member-sidebar .nav-link:hover {
        background: rgba(255, 255, 255, 0.05);
        color: #fff !important;
    }
    .member-sidebar .nav-link.active {
        background: #06B6D4;
        color: #fff !important;
    }
    .member-sidebar .nav-link[data-bs-toggle=\"collapse\"] .bi-chevron-down {
        transition: transform 0.3s;
    }
    .member-sidebar .nav-link[data-bs-toggle=\"collapse\"]:not(.collapsed) .bi-chevron-down {
        transform: rotate(180deg);
    }
    .member-sidebar .sidebar-content::-webkit-scrollbar {
        width: 5px;
    }
    .member-sidebar .sidebar-content::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.05);
    }
    .member-sidebar .sidebar-content::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
    }
</style>
