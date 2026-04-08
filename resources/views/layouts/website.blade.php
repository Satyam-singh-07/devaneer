<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes, viewport-fit=cover">
    <meta name="description" content="@yield('meta_description', 'EliteDirect — Premium wellness products.')">
    <title>@yield('title', 'EliteDirect | Premium Wellness')</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@300;400;500;600;700;1,400&family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    @include('partials.website.styles')
    @stack('styles')
</head>
<body>
    @include('partials.website.navbar')

    @yield('content')

    @include('partials.website.footer')

    @stack('scripts')
</body>
</html>