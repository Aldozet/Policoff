<?php

    /*$conex = mysqli_connect("localhost", "root", "", "policoffv2");
    $conex->set_charset("utf8");

    if (!$conex) {

        die("Error de conexión: " . mysqli_connect_error());

    }else {

        echo "Conexión exitosa";

    }*/



    

if (isset($_POST['Enviar'])) {

    if (!empty($_POST['apellidoPaterno']) &&
        !empty($_POST['apellidoMaterno']) &&
        !empty($_POST['nombreUsuario']) &&
        !empty($_POST['identificador']) &&
        !empty($_POST['correoElectronico']) &&
        !empty($_POST['usuario']) &&
        !empty($_POST['contraseñaUsuario'])
    ) {

        $nombreUsuario = trim($_POST['usuario']);
        $correoInstitucional = trim($_POST['correoElectronico']);
        // Verifica si el usuario existe
        $sql = "SELECT * FROM `usuario` WHERE `nombreUsuario`='$nombreUsuario' OR `correoInstitucional`='$correoInstitucional'";
        $result = mysqli_query($conex,$sql);
        if(mysqli_num_rows($result)>0)
        {
            echo '<div class="alerta">Usuario o correo ya registrado, ingrese un usuario diferente</div>';
        }
        else{
        // Verifica que la conexión se haya realizado correctamente
        if ($conex !== FALSE)
        {
            $idUsuario = null;
            $apellidoPaterno = trim($_POST['apellidoPaterno']);
            $apellidoMaterno = trim($_POST['apellidoMaterno']);
            $nombre = trim($_POST['nombreUsuario']);
            $tipo = trim($_POST['identificador']);
            $password = trim($_POST['contraseñaUsuario']);

            // Prepara la sentencia SQL
            $stmt = mysqli_stmt_init($conex);
            if (mysqli_stmt_prepare($stmt, "INSERT INTO `usuario`(`idUsuario`, `nombre`, `apellidoMaterno`, `apellidoPaterno`, `correoInstitucional`, `tipo`, `nombreUsuario`, `password`) VALUES (?,?,?,?,?,?,?,?)")) 
            {
                // Vincula las variables a los parámetros de la sentencia
                mysqli_stmt_bind_param($stmt, "isssssss", $idUsuario, $nombre, $apellidoMaterno, $apellidoPaterno, $correoInstitucional, $tipo, $nombreUsuario, $password);
                mysqli_stmt_execute($stmt);
            $num_rows = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            echo '<div class="alerta">Usuario registrado correctamente</div>';
        }
        }
    }
    }
}
?>