<?php
session_start();
$name = $_POST["name"];
$bio = $_POST["bio"];
$phone =  $_POST["phone"];
$email = $_POST["email"];
$password = $_POST["pswrd"];
$id = $_SESSION['id'];

require_once "conexiondb.php";

if(isset($_FILES["imagen"]) && !empty($_FILES["imagen"]["name"])){
    $dataImg = addslashes(file_get_contents($_FILES["imagen"] ["tmp_name"]));
   $mysqli->query("UPDATE `users` SET `photo` = '$dataImg' WHERE `users`.`id` = $id");
   $consulta = $mysqli->query("SELECT * FROM `users` WHERE email = '$email'");
    $resultado = $consulta->fetch_assoc();
   $_SESSION['photo'] = base64_encode($resultado["photo"]);
}

if ( !empty($dataImg) ||!empty($name) || !empty($bio) || !empty($phone) || !empty($password)) {
    $query = "UPDATE `users` SET ";
    
    if (!empty($name)) {
        $query .= "`name` = '" . mysqli_real_escape_string($mysqli, $name) . "', ";
        $_SESSION['name'] = $name;
    }
    if (!empty($bio)) {
        $query .= "`biografia` = '" . mysqli_real_escape_string($mysqli, $bio) . "', ";
        $_SESSION['bio'] = $bio;
    }
    if (!empty($phone)) {
        $query .= "`phone` = '" . mysqli_real_escape_string($mysqli, $phone) . "', ";
        $_SESSION['phone'] = $phone;
    }
    if (!empty($password)) {
        $query .= "`pasword` = '" . mysqli_real_escape_string($mysqli, $contrahash) . "', ";
        $_SESSION['pasword'] =  $password;
    }

    $query = rtrim($query, ", ");
    $query .= " WHERE `users`.`id` = $id ;";
  
    $mysqli->query($query);
}

header("Location: profile.php");
?>