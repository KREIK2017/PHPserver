
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @include('layouts.header')

    <div class="container">
        <h1>Blog Post</h1>
        <p>{{ $post }}</p>
    </div>

    @include('layouts.footer')
</body>
</html>
