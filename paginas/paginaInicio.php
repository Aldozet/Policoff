<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Poli Coff</title>
    <link href="../estilo/estiloPagPrincipal.css" type="text/css" rel="stylesheet">
    <link rel="icon" href="../iconos/LOGOTIPO-05.png">

</head>

<body>
    <header>
    </header>
    <main>
        <section class="PagPrincipal">
            <?php
            include("../phpBack/con_db.php");
            $query = "SELECT idCafeteria, nombre, imagen FROM cafeteria;";
            $res = mysqli_query($conex, $query);
            while ($row = mysqli_fetch_assoc($res)) {
            ?>
                <div class="marco">
                        <a href="../paginas/cafeteriaInformacion.php?id=<?php echo $row['idCafeteria']; ?>">
                        <img width="90%" src="data:<?php echo $row['nombre']; ?>;base64,<?php echo  base64_encode($row['imagen']); ?>">
                        <br>
                        <?php echo $row['nombre']; ?>
                    </a>
                </div>
            <?php
            }
            ?>
        </section>
    </main>


</body>

</html>