<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('cart.index')}}" method="post"  enctype="multipart/form">
        @csrf
        <input type="text" name="username">
        <input type="password" placeholder="Enter your password" name="password">
        <input type="file" name="image" id="image">
        <input type="submit" >
    </form>
</body>
</html>