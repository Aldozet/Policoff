<?php

// Verifica que la conexión se haya realizado correctamente
if ($conex !== FALSE) {
    // Prepara la sentencia SQL
    $stmt = mysqli_stmt_init($conex);
    if (mysqli_stmt_prepare($stmt, "SELECT * FROM `usuario` WHERE `nombreUsuario` = ? AND `password` = ?")) {
        // Vincula las variables a los parámetros de la sentencia
        mysqli_stmt_bind_param($stmt, "ss", $nombreUsuario, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $num_rows = mysqli_num_rows($result);
        mysqli_stmt_close($stmt);
    }
    // Si se ha encontrado un registro, inicia sesión
    if ($num_rows == 1) {
        // Inicia sesión y redirige al usuario a la página protegida
        session_start();
        $_SESSION['logged_in'] = true;
        echo '<div class="alerta">inicio se sesion correcto</div>';
        header("../paginas/perfilUsuario.html");
    } else {
        // Si no se ha encontrado un registro, muestra un mensaje de error
        echo '<div class="alerta">Nombre de usuario o contraseña incorrectos</div>';
    }
}


?>