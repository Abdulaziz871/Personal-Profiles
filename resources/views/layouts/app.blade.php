<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Personal Profile')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom Styles -->
    <style>
        :root {
            --primary-dark: #0C2B4E;
            --primary-medium: #1A3D64;
            --primary-light: #1D546C;
            --background-light: #F4F4F4;
            --text-dark: #2c3e50;
            --text-light: #6c757d;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background-color: var(--background-light);
            color: var(--text-dark);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            line-height: 1.6;
        }

        main {
            flex: 1;
        }

        /* Navigation Styles */
        .navbar {
            background-color: var(--primary-dark) !important;
            padding: 1rem 0;
            box-shadow: 0 2px 15px rgba(12, 43, 78, 0.1);
            position: relative;
            z-index: 1000;
        }
        
        /* Transparent navbar for home page */
        .navbar-transparent {
            background-color: transparent !important;
            box-shadow: none !important;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            letter-spacing: -0.5px;
            color: white !important;
        }

        .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.85) !important;
            font-weight: 500;
            padding: 0.5rem 1.2rem !important;
            margin: 0 0.2rem;
            transition: all 0.3s ease;
            border-radius: 6px;
        }

        .navbar-nav .nav-link:hover {
            color: white !important;
            background-color: rgba(255, 255, 255, 0.1);
        }

        .navbar-nav .nav-link.active {
            color: white !important;
            background-color: var(--primary-light);
        }

        /* Footer Styles */
        footer {
            background-color: var(--primary-dark);
            color: rgba(255, 255, 255, 0.8);
            padding: 2rem 0;
            margin-top: 4rem;
        }

        footer p {
            margin: 0;
            font-size: 0.95rem;
        }

        /* Utility Classes */
        .section-title {
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 1rem;
        }

        .text-primary-custom {
            color: var(--primary-dark) !important;
        }

        .bg-primary-custom {
            background-color: var(--primary-dark) !important;
        }

        .bg-primary-medium {
            background-color: var(--primary-medium) !important;
        }

        .bg-primary-light {
            background-color: var(--primary-light) !important;
        }

        .btn-primary-custom {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
            color: white;
            font-weight: 600;
            padding: 0.75rem 2rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-primary-custom:hover {
            background-color: var(--primary-medium);
            border-color: var(--primary-medium);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(12, 43, 78, 0.3);
        }

        .btn-outline-primary-custom {
            border: 2px solid var(--primary-dark);
            color: var(--primary-dark);
            background: transparent;
            font-weight: 600;
            padding: 0.75rem 2rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-outline-primary-custom:hover {
            background-color: var(--primary-dark);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(12, 43, 78, 0.3);
        }
    </style>

    @yield('styles')
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">al3yal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                    </li>
                    <!-- 'About Me' nav removed (site uses per-member About pages) -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <p>&copy; {{ date('Y') }} Personal Profile. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @yield('scripts')
</body>
</html>
