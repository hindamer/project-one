<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Insert Photo Here</h1>
    <form method="post" action="/photos">
      @csrf
       Photo name:<input type="text">
       <br>
       <input type="submit">
    </form>
</body>
</html>