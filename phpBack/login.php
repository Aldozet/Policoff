<?php


if (!empty($_POST["Enviar"])) {
   if (empty($_POST["usuario"]) || empty($_POST["contraseñaUsuario"])) {
        echo '<div class="alerta">Uno o mas campos estan vacios</div>';
   } else {
        $nombreUsuario = trim($_POST["usuario"]);
        $password = trim($_POST["contraseñaUsuario"]);
        $sql = $conex->query("SELECT `nombreUsuario`, `password` FROM `usuario` WHERE nombreUsuario = '$nombreUsuario' and password = '$password'");
        if ($datos = $sql->fetch_object()) {
            header("location: ..\paginas\perfilUsuario.php");
        } else {
            echo '<div class="alerta">Acceso denegado</div>';
        }
    }
   
}


?>