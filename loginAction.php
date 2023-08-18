<?php 
$correo = $_POST["email"];
$password = $_POST["pswrd"];

try {
    $mysqli = new mysqli("localhost", "root", "", "miniproyecto");
    $consulta = $mysqli->query("SELECT * FROM `users` WHERE email = '$correo' and pssword = '$password'");
    $resultado = $consulta->fetch_assoc();
   
    if ($resultado['email'] == $correo && $resultado['pssword'] == $password) {
        session_start();
        $_SESSION['email'] =  $resultado['email'];
        $_SESSION['pswrd'] =  $resultado['pssword'];
        $_SESSION['id'] =  $resultado['id'];
        $_SESSION['phone'] =  $resultado['phone'];
        $_SESSION['bio'] =  $resultado['biografia'];
        $_SESSION['name'] =  $resultado['name'];
        header("Location: profile.php");
        exit();
    }
} catch(mysqli_sql_exception $e) {
    echo "Error" . $e->getMessage();
}
?>