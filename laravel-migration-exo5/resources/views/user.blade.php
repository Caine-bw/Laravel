<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>users</title>
</head>
<body>
    
    <h1>Users</h1>
    @foreach ($users as $user)
        <p> {{ $user -> name . " " . $user->email}} </p>
        <form action="/user{{ $user->id}}/delete" method="POST">
            @csrf
            <button type="submit">Delete</button>
            </form>
        
    @endforeach
</body>
</html>
