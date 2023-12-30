<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
   <form method="post" action="{{route('store')}}">
    @csrf
        <label for="name">Customer Name</label>
        <input type="text" name="name">
        <br>
        <label for="email">Customer Email</label>
        <input type="email" name="email">
        <br>
        <input type="submit" value="Add">
   </form>
      
 
</body>
</html>