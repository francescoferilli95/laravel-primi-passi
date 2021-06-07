<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <style>
        body {
            background: #ddd;
        }
        header {
            padding: 20px;
            margin-bottom: 50px;
            background: #333;
            color: #fff;
        }
    </style>
</head>
<body>
    
    <header>
        <h1>Welcome to New Laravel Project Homepage</h1>
    </header>

    <main>
        <nav>
            <a href="{{ route('home') }}">Homepage</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('contact') }}">Contacts</a>
            <a href="{{ route('product') }}">Products</a>
        </nav>
    </main>

</body>
</html>