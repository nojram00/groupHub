<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="registered" method="post">
        @csrf
        <input type="text" name="name" id="name">
        <label for="name">Name</label>
        <input type="text" name="password" id="password">
        <label for="password">Password</label>
        <button type="submit">SignUp</button>
    </form>
</body>
</html>