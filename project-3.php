<?php


$username = "admin";
$password = "1234";


$inputUsername = "admin";
$inputPassword = "1234";


if ($inputUsername === $username && $inputPassword === $password) {
    echo "Login Successful";
} else {
    echo "Invalid username or password";
}

?>
