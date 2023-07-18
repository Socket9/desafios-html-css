<?php
if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];
    
    echo "Hola tu nombre es " . $user . "<br>";
    echo "y tu contraseña es " . $password;
}
?>
