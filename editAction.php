<?php
// UPDATE users SET email = 'aleto', pssword = 'popo' WHERE id = 4;
session_start();
$name = $_POST["name"];
$bio = $_POST["bio"];
$phone =  $_POST["phone"];
$email = $_POST["email"];
$password = $_POST["pswrd"];
$id = $_SESSION['id'];

require_once "conexiondb.php";
$mysqli->query("UPDATE `users` SET `name` = '$name', `biografia` = '$bio', `phone` = '$phone', `email` = '$email', `pssword` = '$password' WHERE `users`.`id` = $id ;");
$_SESSION['email'] =  $email;
$_SESSION['pswrd'] =  $password;
$_SESSION['phone'] =  $phone;
$_SESSION['bio'] =  $bio;
$_SESSION['name'] =  $name;
header("Location: profile.php");
