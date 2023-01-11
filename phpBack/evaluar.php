<?php

if (isset($_POST['Enviar'])) {

    if (!empty($_POST['servicio']) &&
        !empty($_POST['comida']) &&
        !empty($_POST['precios'])
    ) {
        
        $idproducto = null;
        $descripcion = trim($_POST['servicio']);
        $ingredientes= trim($_POST['comida']);
        $categoria = trim($_POST['precios']);

        
        // Verifica que la conexión se haya realizado correctamente
        if ($conex !== FALSE)
        {
            // Prepara la sentencia SQL

            $stmt = mysqli_stmt_init($conex);
            if (mysqli_stmt_prepare($stmt, "INSERT INTO `evalua`(`idEvaluacion`, `fk_producto`, `fk_cafeteria`, `fk_usuario`, `servicio`, `comida`, `precio`, `comentario`, `fecha`) VALUES (?,?,?,?,?,?)")) {
                // Vincula las variables a los parámetros de la sentencia
                mysqli_stmt_bind_param($stmt, "isssss", $idproducto, $descripcion, $imagen, $precio, $categoria, $ingredientes);
                mysqli_stmt_execute($stmt);
                $num_rows = mysqli_stmt_affected_rows($stmt);
                mysqli_stmt_close($stmt);
                if ($num_rows > 0
                ) {
                    echo '<div class="alerta">Producto registrado correctamente</div>';
                } else {
                    echo '<div class="alerta">Error al registrar producto</div>';
                }
            }
        }
    }
}
