<?php 

const USERNAME = 'admin';
const PASSWORD = 123456;

echo 'Enter Username:';
$Username = readline();

echo 'Enter Password:';
$Password = (int) readline();

if (empty($Username) || empty($Password)) {
    echo 'Username or Password cannot be empty';
} else {
    if ($Username === USERNAME && $Password === PASSWORD) {
        echo 'Login Successful ! User Dashboard';
    } else {
        echo 'Invalid Username or Password';
    }
}
