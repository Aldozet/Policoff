<?php



if (isset($_POST['Enviar'])) {

    if (!empty($_POST['DescripcionProducto']) &&
        !empty($_POST['Ingredientes']) &&
        !empty($_POST['categoria']) &&
        !empty($_POST['Precio']) 
    ) {
        $idproducto = null;
        $descripcion = trim($_POST['DescripcionProducto']);
        $ingredientes= trim($_POST['Ingredientes']);
        $categoria = trim($_POST['categoria']);
        $precio = trim($_POST['Precio']);


        if (count($_FILES) > 0) {

            if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
                $imgData = file_get_contents($_FILES['imagen']['tmp_name']);
                $imagen  = $_FILES['imagen']['type'];
                
                }
        }else {

            $imagen = null;
        }



        // Verifica que la conexión se haya realizado correctamente
        if ($conex !== FALSE)
        {
            // Prepara la sentencia SQL
            $stmt = mysqli_stmt_init($conex);
            if (mysqli_stmt_prepare($stmt,"INSERT INTO `producto`(`idProducto`, `nombre`, `imagen`, `precio`, `tipo`, `descripcion`) VALUES (?,?,?,?,?,?)")) {
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

?>