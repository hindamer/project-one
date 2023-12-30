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
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Date</th>
            <th>User_Id</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th>Show</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Delete</th>
        </tr>
        @foreach($posts as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->post_tittle}}</td>
            <td>{{$value->post_content}}</td>
            <td>{{$value->post_date}}</td>
            <td>{{$value->user_id}}</td>
            <td>{{$value->created_at}}</td>
            <td>{{$value->updated_at}}</td>
            <td><a href="/show/{{$value->id}}">Show</a></td>
            <td><a href="/edit/{{$value->id}}">Edit</a></td>
            <th><a href="/delete/{{$value->id}}">Delete</a></th>
            <th>
                <form method="post" action="/deletepost">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" value="{{$value->id}}">
                    <input type="submit" value="Delete">
                </form>
            </th>
        </tr>
        @endforeach
    </table>
</body>
</html>