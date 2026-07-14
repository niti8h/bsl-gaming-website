<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') - BSL Gaming</title>
    <!-- Include Quill for Rich Text -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <style>
        :root {
            --royal-gold: #D4AF37;
            --dark-bg: #121212;
            --dark-surface: #1e1e1e;
            --dark-border: #333;
            --text-main: #f5f5f5;
            --text-muted: #aaa;
        }
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            background-color: var(--dark-bg);
            color: var(--text-main);
            font-family: 'Inter', 'Segoe UI', sans-serif;
            display: flex;
            height: 100vh;
            overflow: hidden;
        }
        /* Sidebar */
        .sidebar {
            width: 260px;
            background-color: var(--dark-surface);
            border-right: 1px solid var(--dark-border);
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
        }
        .sidebar-header {
            padding: 20px;
            font-size: 20px;
            font-weight: 700;
            color: var(--royal-gold);
            border-bottom: 1px solid var(--dark-border);
            text-align: center;
        }
        .sidebar-nav {
            flex-grow: 1;
            padding: 20px 0;
        }
        .nav-item {
            display: block;
            padding: 12px 20px;
            color: var(--text-muted);
            text-decoration: none;
            transition: all 0.3s;
            border-left: 3px solid transparent;
        }
        .nav-item:hover, .nav-item.active {
            color: var(--royal-gold);
            background-color: rgba(212, 175, 55, 0.05);
            border-left-color: var(--royal-gold);
        }
        .sidebar-footer {
            padding: 20px;
            border-top: 1px solid var(--dark-border);
        }
        
        /* Main Content */
        .main-content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }
        .top-navbar {
            height: 65px;
            background-color: var(--dark-surface);
            border-bottom: 1px solid var(--dark-border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
            flex-shrink: 0;
        }
        .top-navbar h1 {
            font-size: 18px;
            font-weight: 600;
        }
        .logout-form button {
            background: none;
            border: none;
            color: var(--text-muted);
            cursor: pointer;
            font-size: 14px;
            transition: color 0.3s;
        }
        .logout-form button:hover {
            color: var(--royal-gold);
        }
        
        .content-area {
            flex-grow: 1;
            padding: 30px;
            overflow-y: auto;
        }
        
        /* Shared Components */
        .card {
            background-color: var(--dark-surface);
            border: 1px solid var(--dark-border);
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: var(--royal-gold);
            color: #000;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
        }
        .btn-primary:hover {
            background-color: #c49f2b;
        }
        .btn-danger {
            background-color: #ff4757;
            color: #fff;
            padding: 8px 15px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--text-muted);
        }
        .form-control {
            width: 100%;
            padding: 12px;
            background-color: var(--dark-bg);
            border: 1px solid var(--dark-border);
            color: var(--text-main);
            border-radius: 6px;
        }
        .form-control:focus {
            outline: none;
            border-color: var(--royal-gold);
        }
        
        /* Table */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid var(--dark-border);
        }
        th {
            color: var(--text-muted);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 12px;
        }
        .alert-success {
            background-color: rgba(46, 213, 115, 0.1);
            border-left: 4px solid #2ed573;
            color: #2ed573;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: var(--royal-gold);
            font-size: 24px;
            cursor: pointer;
            margin-right: 15px;
        }

        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                left: -260px;
                top: 0;
                bottom: 0;
                z-index: 1000;
                transition: left 0.3s ease;
            }
            .sidebar.show {
                left: 0;
                box-shadow: 2px 0 10px rgba(0,0,0,0.5);
            }
            .mobile-menu-btn {
                display: block;
            }
            .top-navbar {
                justify-content: flex-start;
                padding: 0 15px;
            }
            .top-navbar .logout-form {
                margin-left: auto;
            }
            .content-area {
                padding: 15px;
            }
            .card {
                overflow-x: auto;
            }
        }
    </style>
    @stack('styles')
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            BSL Admin
        </div>
        <nav class="sidebar-nav">
            <a href="{{ route('admin.dashboard') }}" class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
            <a href="{{ route('admin.blogs.index') }}" class="nav-item {{ request()->routeIs('admin.blogs.*') ? 'active' : '' }}">Blogs</a>
            <a href="{{ route('admin.messages.index') }}" class="nav-item {{ request()->routeIs('admin.messages.*') ? 'active' : '' }}">Messages</a>
            <a href="{{ route('admin.appearance.index') }}" class="nav-item {{ request()->routeIs('admin.appearance.*') ? 'active' : '' }}">Appearance</a>
            <a href="{{ route('admin.settings.index') }}" class="nav-item {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">Contact Settings</a>
        </nav>
        <div class="sidebar-footer">
            <span style="font-size: 12px; color: var(--text-muted);">Logged in as Admin</span>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <header class="top-navbar">
            <button class="mobile-menu-btn" id="mobileMenuBtn">☰</button>
            <h1>@yield('header', 'Dashboard')</h1>
            <form class="logout-form" action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit">Logout &rarr;</button>
            </form>
        </header>

        <section class="content-area">
            @if(session('success'))
                <div class="alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')
        </section>
    </main>

    <script>
        document.getElementById('mobileMenuBtn').addEventListener('click', function(e) {
            e.stopPropagation();
            document.querySelector('.sidebar').classList.toggle('show');
        });
        
        // Close sidebar when clicking outside on mobile
        document.querySelector('.main-content').addEventListener('click', function(e) {
            if (window.innerWidth <= 768 && document.querySelector('.sidebar').classList.contains('show')) {
                document.querySelector('.sidebar').classList.remove('show');
            }
        });
        
        // Prevent clicks inside sidebar from closing it
        document.querySelector('.sidebar').addEventListener('click', function(e) {
            e.stopPropagation();
        });
    </script>
    @stack('scripts')
</body>
</html>
