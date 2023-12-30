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
        <th>post_tittle</th>
        <th>post_content</th>
        <th>post_date</th>
        <th>user_id</th>
        <th>created_at</th>
        <th>updated_at</th>
    </tr>
    @foreach($posts as $val)
    <tr>
        <td>{{$val->post_tittle}}</td>
        <td>{{$val->post_content}}</td>
        <td>{{$val->post_date}}</td>
        <td>{{$val->user_id}}</td>
        <td>{{$val->created_at}}</td>
        <td>{{$val->updated_at}}</td>
    </tr>
    @endforeach
   </table>
</body>
</html>