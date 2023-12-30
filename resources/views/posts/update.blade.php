<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('update',[$post->id])}}">
        @csrf
        <label for="user_id">user_id</label>
        <br>
        <input type="text" name="user_id" value="{{$post->user_id}}">
        <br>
        <br>
        <label for="post_tittle">post_tittle</label>
        <br>
        <input type="text" name="post_tittle" value="{{$post->post_tittle}}">
        <br>
        <br>
        <label for="post_content">post_content</label>
        <br>
        <input type="text" name="post_content" value="{{$post->post_content}}">
        <br>
        <br>
        <label for="post_date">post_date</label>
        <br>
        <input type="" name="post_date" value="{{$post->post_date}}">
        <input type="submit" value="add">
    </form>
</body>
</html>