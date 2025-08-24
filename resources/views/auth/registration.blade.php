<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form action="{{ url('/registration')}}" method="POST">
        @csrf
        <h1>Login to Your Account</h1>
        <input type="text" placeholder="Enter Full Name" name="name" required> <br><br>
        <input type="email" placeholder="Enter Email" name="email" required> <br><br>
        <input type="password" placeholder="Enter Password" name="password" required> <br><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>