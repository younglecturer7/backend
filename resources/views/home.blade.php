<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h3>List of Users</h3>
    @forelse ($users as $user)
        <p>{{ $user->name }}</p>
    @empty
        <em>no user in the database..</em>
    @endforelse
</body>
</html>

