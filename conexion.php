<?php 
$correo = $_POST["email"] ;
$password = $_POST["pswrd"];

try {
    $mysqli = new mysqli("localhost", "root", "", "miniproyecto");
    $mysqli->query("INSERT INTO users(email, pssword) VALUES ('$correo', '$password');");
    
    header("location:login.php");
} catch(mysqli_sql_exception $e) {
    echo "Error" . $e->getMessage();
}

?>