<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @include('layouts.header')

    <div class="container">
        <h1>Welcome to Index Page</h1>
    </div>

    @include('layouts.footer')
</body>
</html>
