<?php 
    $login = filter_var(trim($_POST['login']));
    $name = filter_var(trim($_POST['name']));
    $password = filter_var(trim($_POST['password']));


    // if (mb_strlen($login) <  5 || mb_strlen($login) > 90) {
    //     echo "Login is too long (5 to 90 characters)";
    //     exit();
        
// }
    if (mb_strlen($name) <  3 || mb_strlen($name) > 50) {
        echo "Name is too long (3 to 50 characters)";
        exit();
    } else if (mb_strlen($password) <  2 || mb_strlen($password) > 6) {
        echo "Password is too long(2 to 6 characters)";
        exit();
    } 


    $password = md5($password."sAv3evmeandooascmNdask2599966k");

    $mysql = new mysqli('localhost', 'root', 'sfxkvxvk9q5jxcvkmMMMcx13sgcvb', 'register-bd');
    $mysql->query("INSERT INTO `users`(`login`, `password`, `name`)
    VALUES('$login', '$password', '$name')");

    header('Location: /');  
