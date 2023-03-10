<?php

if (isset($_POST['Enviar'])) {

    if (!empty($_POST['servicio']) &&
        !empty($_POST['comida']) &&
        !empty($_POST['precios'])
    ) {
        echo '<div class="alerta">paso 1</div>';
        $idevaluacion = null;
        $servicio = trim($_POST['servicio']);
        $comida= trim($_POST['comida']);
        $precios = trim($_POST['precios']);
        $comentario = trim($_POST['comentario']);
        $producto = "1";
        $cafeteria = trim($_GET['idCafeteria']);
        $usuario = "1";
        echo '<div class="alerta">paso 2</div>';
        // Verifica que la conexión se haya realizado correctamente
        if ($conex !== FALSE)
        {
            // Prepara la sentencia SQL

            $stmt = mysqli_stmt_init($conex);
            if (mysqli_stmt_prepare($stmt, "INSERT INTO `evalua`(`idEvaluacion`, `fk_producto`, `fk_cafeteria`, `fk_usuario`, `servicio`, `comida`, `precio`, `comentario`) VALUES (?,?,?,?,?,?,?,?)")) {
                // Vincula las variables a los parámetros de la sentencia
                mysqli_stmt_bind_param($stmt, "iiiiiiis", $idevaluacion, $producto, $cafeteria, $usuario, $servicio, $comida, $precios, $comentario);
                mysqli_stmt_execute($stmt);
                $num_rows = mysqli_stmt_affected_rows($stmt);
                mysqli_stmt_close($stmt);
                if ($num_rows > 0
                ) {
                    echo '<div class="alerta">Evaluacion exitosa</div>';
                } else {
                    echo '<div class="alerta">Error al realizar evaluacion</div>';
                }
            }
        }
    }
}
