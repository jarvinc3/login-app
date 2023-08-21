<?php
$correo = $_POST["email"];
$password = $_POST["pswrd"];

try {
    $mysqli = new mysqli("localhost", "root", "", "miniproyecto");
    $consulta = $mysqli->query("SELECT * FROM `users` WHERE email = '$correo'");
    $resultado = $consulta->fetch_assoc();

    if ($resultado['email'] == "$correo") {
        echo("cuenta existente");
        die();
        
    } else {
    session_start();
    $passHash = password_hash($password, PASSWORD_DEFAULT);
    $mysqli->query("INSERT INTO users(email, pssword) VALUES ('$correo', '$passHash');");
    $consulta = $mysqli->query("SELECT * FROM `users` WHERE email = '$correo' ");
    $resultado = $consulta->fetch_assoc();
    $_SESSION['email'] =  $resultado['email'];
    $_SESSION['pswrd'] =  $resultado['pssword'];
    $_SESSION['id'] =  $resultado['id'];
    $_SESSION['phone'] =  $resultado['phone'];
    $_SESSION['bio'] =  $resultado['biografia'];
    $_SESSION['name'] =  $resultado['name'];
    header("location:profile.php");
    }

    
} catch (mysqli_sql_exception $e) {
    echo "Error" . $e->getMessage();
}
