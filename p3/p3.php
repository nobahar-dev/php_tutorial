<?php
session_start();
$token = 'session2ken';
$_SESSION['my_token'] = $token;
echo $_SESSION['my_token'];
echo '<hr>';

$user_cookie = 'my2kenvalcookie';
setcookie('user_cookie', $user_cookie, time() + 10);

if (isset($_COOKIE['user_cookie'])) {
    echo 'the cookie is set <br>';
} else {
    echo 'the cookie is not set <br>';
}