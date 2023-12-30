<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        @foreach ($users as $value)
        <tr>
            <td>{{$value->name}}</td>
            <td>{{$value->email}}</td>
            <td><a href="/edit/{{$value->id}}">Edit</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>