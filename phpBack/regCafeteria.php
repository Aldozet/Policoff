<?php

if (isset($_POST['Enviar'])) {

    if (!empty($_POST['DatosGenerales']) &&
        !empty($_POST['Categoria']) &&
        !empty($_POST['Institucion']) &&
        !empty($_POST['Proveedor'])
    ) {

        $idCafeteria = null;
        $datosGenerales = trim($_POST['DatosGenerales']);
        $categoria= trim($_POST['Categoria']);
        $institucion = trim($_POST['Institucion']);
        $proveedor = trim($_POST['Proveedor']);

        if (count($_FILES) > 0) {

            if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
                $imagen = file_get_contents($_FILES['imagen']['tmp_name']);
               /* $imagen  = $_FILES['imagen']['type'];*/
            }
        } else {

            $imagen = null;
        }

        // Verifica que la conexión se haya realizado correctamente
        if ($conex !== FALSE)
        {
            // Prepara la sentencia SQL
            $stmt = mysqli_stmt_init($conex);
            if (mysqli_stmt_prepare($stmt, "INSERT INTO `cafeteria`(`idCafeteria`, `nombre`, `imagen`, `fk_escuela`, `Proveedor`) VALUES (?,?,?,?,?)")) {
                // Vincula las variables a los parámetros de la sentencia

                mysqli_stmt_bind_param($stmt, "issss", $idCafeteria, $datosGenerales, $imagen, $institucion, $proveedor);
                mysqli_stmt_execute($stmt);

                $num_rows = mysqli_stmt_affected_rows($stmt);
                mysqli_stmt_close($stmt);
                if ($num_rows > 0
                ) {
                    echo '<div class="alerta">Cafeteria registrada correctamente</div>';
                } else {
                    echo '<div class="alerta">Error al registrar Cafeteria</div>';
                }
            }
        }
    }
}
?>
