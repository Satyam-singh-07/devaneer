<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Dashboard | Devaneer</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body { 
            background: #f8fafc; 
            min-height: 100vh;
            font-family: 'Inter', sans-serif;
        }
        .member-wrapper {
            display: flex;
        }
        main { 
            flex: 1; 
            padding: 30px; 
            overflow-y: auto; 
            height: 100vh;
        }
        .card {
            border: none;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            border-radius: 12px;
        }
        .text-cyan {
            color: #06B6D4;
        }
        .bg-cyan {
            background-color: #06B6D4;
        }
    </style>
    @stack('styles')
</head>
<body>
    <div class="member-wrapper">
        @include('partials.member.sidebar')
        
        <main>
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h4 class="fw-bold mb-0">Member Panel</h4>
                    <span class="text-muted small">Welcome back, {{ Auth::user()->name }}</span>
                </div>
                <div class="dropdown">
                    <button class="btn btn-white shadow-sm dropdown-toggle rounded-pill px-3" type="button" data-bs-toggle="dropdown">
                        <i class="bi bi-person-circle me-1 text-cyan"></i> {{ Auth::user()->username }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end border-0 shadow">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i> Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="{{ route('member.logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item text-danger">
                                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success border-0 shadow-sm mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')
            
            <footer class="mt-5 pt-4 border-top text-center text-muted small">
                &copy; {{ date('Y') }} Devaneer Premium Wellness. All rights reserved.
            </footer>
        </main>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
