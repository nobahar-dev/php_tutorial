<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Form</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <div class="input-holder">
        <label for="username">username</label>
        <input type="text" name="username" id="username" placeholder="username">
    </div>

    <div class="input-holder">
        <label for="password">password</label>
        <input type="password" name="password" id="password" placeholder="password">
    </div>

    <button type="submit" name="submit" value="login-user">Submit</button>
</form>
</body>
</html>

<?php
if (isset($_POST['submit']) and $_POST['submit'] == 'login-user') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        echo "username is : $username and password is $password";
    } else {
        echo 'the method is not post';
    }
}