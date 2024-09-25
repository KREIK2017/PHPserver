<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<form action="{{ route('user.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ $user->name }}" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ $user->email }}" required>

    <label for="password">Password (leave blank if unchanged):</label>
    <input type="password" id="password" name="password">

    <button type="submit">Update User</button>
</form>
