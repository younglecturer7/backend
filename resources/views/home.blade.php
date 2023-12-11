<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h3>List of Users</h3>
    <ol>
    @forelse ($users as $user)
        <li>
            <strong>Name: </strong> {{ $user->name }}
            &nbsp; &nbsp; &nbsp;
            <strong>Email: </strong> {{ $user->email }}
        </li>
    @empty
        <li><em>no user in the database..</em></li>
    @endforelse
    </ol>
</body>
</html>

