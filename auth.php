<?php 

const USERNAME = 'admin';
const PASSWORD = "1234";

echo 'Enter Username:';
$Username = readline();

echo 'Enter Password:';
$Password = readline();

if (empty($Username) || empty($Password)) {
    echo 'Username or Password cannot be empty';
} else {
    if ($Username === USERNAME && $Password === PASSWORD) {
        echo 'Login Successful ! User Dashboard';
    } else {
        echo 'Invalid Username or Password';
    }
}
