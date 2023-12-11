<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h3>List of Users</h3>
    <ol>
        {{-- show all users --}}
        @isset($users)
            @forelse ($users as $user)
                <li>
                    <strong>Name: </strong> {{ $user->name }}
                    &nbsp; &nbsp; &nbsp;
                    <strong>Email: </strong> {{ $user->email }}
                </li>
            @empty
                <li><em>no user in the database..</em></li>
            @endforelse
        @endisset


        {{-- show single user --}}
        @isset($user)
            <li>
                <strong>Name: </strong> {{ $user->name }}
                &nbsp; &nbsp; &nbsp;
                <strong>Email: </strong> {{ $user->email }}
            </li>
        @endisset
    </ol>
</body>
</html>

