<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body>
    <h1>Are you sure you want to delete this user?</h1>

    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>

    <form action="{{ route('user.delete', ['id' => $user->id]) }}" method="GET">
        <button type="submit">Yes, Delete</button>
        <a href="{{ route('user.index') }}">Cancel</a>
    </form>
</body>
</html>
