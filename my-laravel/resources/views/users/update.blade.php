<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body>
    <h1>Update User</h1>
    
    <form action="{{ route('user.update', ['id' => $user->id]) }}" method="GET">
        <label for="name">New Name:</label>
        <input type="text" id="name" name="name" value="{{ $user->name }}">
        
        <button type="submit">Update</button>
    </form>
</body>
</html>
