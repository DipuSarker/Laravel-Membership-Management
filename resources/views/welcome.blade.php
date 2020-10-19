<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>
    <h2>Laravel membership project</h2>

    <a href="{{route('posts')}}">Show Post</a>
    <hr>
    <a href="{{route('posts.view')}}">Show Post With View</a>

    <br>
    <br>
    <br>

<form action="{{route('test-post')}}" method="POST">
    @csrf
    <input type="text" value="username" placeholder="Username">
    <input type="text" value="password" placeholder="Password">
    <button type="submit">Submit</button>
</form>

<br>
<br>
<br>

<form action="{{route('test-update', 10)}}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" value="username" placeholder="Username">
    <input type="text" value="password" placeholder="Password">
    <button type="submit">Update</button>
</form>


<br>
<br>
<br>

<form action="{{route('test-delete', 10)}}" method="POST">

    @method('DELETE')
    @csrf
    <button type="submit">Delete</button>
</form>


</body>
</html>