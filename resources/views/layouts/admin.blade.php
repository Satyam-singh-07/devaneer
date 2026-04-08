<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | EliteDirect</title>
    <!-- Basic CSS for Admin -->
    <style>
        body { font-family: sans-serif; margin: 0; display: flex; height: 100vh; background: #f4f7f6; }
        aside { width: 250px; background: #0b1c2c; color: white; padding: 20px; }
        main { flex: 1; padding: 30px; overflow-y: auto; }
        .card { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        h1 { margin-top: 0; }
        nav ul { list-style: none; padding: 0; }
        nav ul li { margin-bottom: 15px; }
        nav ul li a { color: #c5c7c9; text-decoration: none; }
        nav ul li a:hover { color: #c47a3a; }
    </style>
</head>
<body>
    <aside>
        <h2>Elite Admin</h2>
        <nav>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Distributors</a></li>
                <li><a href="#">Orders</a></li>
                <li><a href="{{ url('/') }}">View Website</a></li>
            </ul>
        </nav>
    </aside>
    <main>
        @yield('content')
    </main>
</body>
</html>