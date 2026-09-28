<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Week 06')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #555;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            width: 80%;
            max-width: 900px;
            margin: 30px auto;
            padding: 25px;
            background-color: white;
            border-radius: 8px;
        }

        .alert {
            background-color: #dff0ff;
            border: 1px solid #87ceeb;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 30px;
        }
    </style>
</head>

<body>

    <header>
        <h1>My Laravel Website</h1>
    </header>

    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/contact') }}">Contact</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Web Development - Week 06</p>
    </footer>

</body>

</html>