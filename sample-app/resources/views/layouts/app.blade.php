<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Site')</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            min-height: 100vh;
            background: radial-gradient(circle at 10% 20%, #d8eefe 0, #f6f9ff 40%, #ffffff 100%);
            color: #1f2937;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 32px;
        }

        .card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 20px 60px rgba(15, 23, 42, 0.12);
            max-width: 960px;
            width: 100%;
            padding: 32px;
            border: 1px solid #e5e7eb;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 24px;
        }

        .brand {
            font-weight: 700;
            color: #0f172a;
            letter-spacing: -0.02em;
            margin-right: auto;
        }

        .link {
            text-decoration: none;
            color: #475569;
            font-weight: 600;
            padding: 8px 14px;
            border-radius: 12px;
            transition: all 0.2s ease;
        }

        .link:hover {
            color: #0f172a;
            background: #f1f5f9;
        }

        .link.active {
            color: #0b5ed7;
            background: #e7f1ff;
            border: 1px solid #bfdbfe;
        }

        header h1 {
            font-size: 28px;
            margin-bottom: 8px;
            color: #0f172a;
            letter-spacing: -0.015em;
        }

        header p {
            color: #475569;
            margin-bottom: 24px;
            line-height: 1.5;
        }

        main {
            line-height: 1.7;
            color: #1f2937;
        }

        main h2 {
            font-size: 22px;
            margin-bottom: 12px;
            color: #0f172a;
        }

        main ul {
            padding-left: 20px;
        }

        main li + li {
            margin-top: 8px;
        }

        .pill {
            display: inline-block;
            background: #e0f2fe;
            color: #075985;
            padding: 6px 12px;
            border-radius: 999px;
            font-weight: 600;
            font-size: 13px;
            margin-top: 8px;
        }
    </style>
</head>
<body>
    <div class="card">
        <nav>
            <div class="brand">Laravel Demo</div>
            <a class="link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
            <a class="link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
            <a class="link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
        </nav>

        <header>
            <h1>@yield('title', 'Laravel Site')</h1>
            <p>@yield('subtitle', 'A minimal set of static pages with a shared layout.')</p>
            @yield('meta')
        </header>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>

