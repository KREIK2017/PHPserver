<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @include('layouts.header')
    <div class="container">
        <h1>Welcome to Blog Page</h1>
    </div>
    <h1>Blog</h1>
        <ul class="post">
            <li><a href="{{ route('blog.post', ['id' => 1]) }}">Post 1</a></li>
            <li><a href="{{ route('blog.post', ['id' => 2]) }}">Post 2</a></li>
            <li><a href="{{ route('blog.post', ['id' => 3]) }}">Post 3</a></li>
        </ul>
    <a href="{{ route('redirect') }}">github</a>
    @include('layouts.footer')
</body>
</html>
