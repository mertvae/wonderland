<?php
$login = filter_var(trim($_POST['login']));
$password = filter_var(trim($_POST['password']));

$password = md5($password."sAv3evmeandooascmNdask2599966k");

$mysql = new mysqli('localhost', 'root', 'sfxkvxvk9q5jxcvkmMMMcx13sgcvb', 'register-bd');
$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

$user = $result->fetch_assoc();

if(empty($user) or count($user) == 0){
    echo "You are absent";
    exit(); 
}

print_r($user);
exit();

// setcookie('user', $user['name'], time() + 3600, "/");

header('Location: /');   