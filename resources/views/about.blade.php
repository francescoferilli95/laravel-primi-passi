<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    
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
        <h1>About us</h1>
    </header>

    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus tempora repudiandae laudantium obcaecati quo fuga aut placeat mollitia aspernatur accusantium amet ad hic delectus officiis tenetur facilis, quidem, veritatis velit?<br /> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum cupiditate voluptas mollitia quidem eum excepturi exercitationem sit blanditiis modi, doloribus deleniti minus architecto labore doloremque rerum impedit similique eos repellendus. </p>

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