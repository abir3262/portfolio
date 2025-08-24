<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('/login')}}" method="POST">
        @csrf
        <h1>Login to Your Account</h1>
        <input type="email" placeholder="Enter Email" name="email" required> <br>
        <input type="password" placeholder="Enter Password" name="password" required> <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>