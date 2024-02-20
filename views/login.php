<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<h3>Login form</h3>
<?php showMessage('success') ?>
<form action="/login" method="POST">
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
    <input type="submit" value="Login">
</form>
</body>
</html>
