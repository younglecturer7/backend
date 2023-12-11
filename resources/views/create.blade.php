<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New User</title>
</head>
<body>
    <form method="POST" action="/user">
        @csrf
        <input name="name" placeholder="young" value="{{ old('name') }}" /><br>
        @error('name') {{ $message }} @enderror <br>
        <input name="email" placeholder="young@gmail.com" value="{{ old('email') }}" /><br>
        @error('email') {{ $message }} @enderror <br>
        <input name="password" type="password" placeholder="password" value="{{ old('password') }}" /><br>
        @error('password') {{ $message }} @enderror <br>
        <button type="submit">Register</button>
    </form>

    @isset($newUser)
        <h3>New Users</h3>
        <ol>
            <li>
                <strong>Name: </strong> {{ $newUser['name'] }}
                &nbsp; &nbsp; &nbsp;
                <strong>Email: </strong> {{ $newUser['email'] }}
            </li>
        </ol>
    @endisset
</body>
</html>
