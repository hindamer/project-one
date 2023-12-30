<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('update',[$usr->id])}}">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{$usr->name}}">
        <br>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{$usr->email}}">
        <br>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" value="{{$usr->password}}">
        <input type="submit" value="Add">

    </form>
</body>
</html>