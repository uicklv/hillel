<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
<h3>Register form</h3>
<form action="/register" method="POST">
    <div>
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name">
        <?php showError('name') ?>
    </div>
    <div>
        <label for="age">Your Age</label>
        <input type="number" min="0" step="1" max="150" name="age">
        <?php showError('age') ?>
    </div>
    <div>
        <label for="email">Your Email</label>
        <input type="email" id="email" name="email">
        <?php showError('email') ?>
    </div>
    <div>
        <label for="password">Your Password</label>
        <input type="password" id="password" name="password">
        <?php showError('password') ?>
    </div>
    <div>
        <label for="password_confirm">Password Confirm</label>
        <input type="password" id="password_confirm" name="password_confirm">
        <?php showError('password_confirm') ?>
    </div>
    <input type="submit" value="Register">
</form>
</body>
</html>
