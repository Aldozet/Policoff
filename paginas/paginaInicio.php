<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Poli Coff</title>
    <link href="../estilo/eslito.css" type="text/css" rel="stylesheet">
    <link rel="icon" href="../iconos/LOGOTIPO-05.png">

</head>

<body>
    <header>
    </header>
    <main>
        <section>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-12">
                        <table class="table table-striped">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Imagen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $connection = mysqli_connect("localhost", "root", "", "policoff");
                                $query = "SELECT nombre,imagen FROM cafeteria;";
                                $res = mysqli_query($connection, $query);
                                while ($row = mysqli_fetch_assoc($res)) {
                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $row['nombre']; ?>
                                        </td>
                                        <td>
                                            <?php
                                            echo '<img alt="imagen1" width="100" src="data:image/jpg;base64,' . $row['nombre'] . ';base64,' . base64_encode($row['imagen']) . '">';
                                            ?>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </section>
    </main>

</body>

</html>