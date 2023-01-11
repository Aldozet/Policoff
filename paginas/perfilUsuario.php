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
        <section class="cabecera">
            <div id="bloque1">
                <div id="menu_icon">Menu</div>
                <div>
                    <img id="logo1" alt="logoPrincipal" src="../iconos/LOGOTIPO-05.png" usemap="#PoliLogo">
                    <map name="#PoliLogo">
                        <area shape="circle" coords="0,0,300," alt="Poli Coff" href="../paginas/principal.php" title="Poli Coff">
                    </map>
                </div>
            </div>
            <div>
                <img id="logo2" alt="logoPrincipal" src="../iconos/LOGOTIPO-06.png" usemap="#Policoff">
                <map name="#Policoff">
                    <area shape="rect" coords="0,0,250,50" alt="Poli Coff" href="../paginas/principal.php" title="Poli Coff">
                </map>
            </div>
            <div id="inicioRegistro">
                <a href="../index.html" id="Registro">Cerrar Sesion</a>
            </div>
        </section>

        <section>

            <?php
            session_start();
            include("../phpBack/con_db.php");

            // Verify that a user is logged in
            if (!isset($_SESSION['nombreUsuario'])) {
                // Redirect the user to the login page if not
                header("Location: login.php");
                exit;
            }

            $Usuario = $_SESSION['nombreUsuario'];

            echo "Bienvenida  " . $_SESSION['nombreUsuario'] . "<br>";

            // Select data from the database using the value of the session variable
            $sql = "SELECT idUsuario, nombre, apellidoMaterno, apellidoPaterno, correoInstitucional, tipo, nombreUsuario FROM usuario WHERE nombreUsuario = ?";

            $stmt = mysqli_prepare($conex, $sql);
            mysqli_stmt_bind_param($stmt, 's', $Usuario);

            $result = mysqli_stmt_execute($stmt);

            //Check if the query return any result
            if (mysqli_stmt_store_result($stmt)) {
                if (mysqli_stmt_num_rows($stmt) > 0) {
                    //Loop through the result set and output the data
                    mysqli_stmt_bind_result($stmt, $idUsuario, $nombre, $apellidoMaterno, $apellidoPaterno, $correoInstitucional, $tipo, $nombreUsuario);
                    echo "<div id='usuario-info'>";
                    while (mysqli_stmt_fetch($stmt)) {
                        echo "Usuario: " . $nombreUsuario . "<br>";
                        echo "Nombre: " . $nombre . " " . $apellidoPaterno . " " . $apellidoMaterno . "<br>";
                        echo "Correo Institucional: " . $correoInstitucional . "<br>";
                        echo "Tipo: " . $tipo . "<br>";
                    }
                    echo "</div>";
                } else {
                    echo "El usuario no existe en la base de datos";
                }
            }

            mysqli_stmt_close($stmt);


            ?>


        </section>
        <section>
            <div id="RegistroProCaf">
                <a href="../paginas/registroCafeteria.php" id="RegistroCafeteria" class="boton">Registro Cafeteria</a>
                <a href="../paginas/registroProducto.php" id="RegistroProducto" class="boton">Registro Producto</a>
            </div>

        </section>

    </main>
    <footer>
        <section id="pie">
            <h3><b> Acerca de la página </b></h3>
            <p> Equipo 6 del 6CV1 Curso Ingeniería de Software</p>
            <p>Esta página fue elaborada por alumnos de la
                <a href="https://www.escom.ipn.mx/" target="_blank" title="ESCOM" id="ESCOM">
                    <abbr title="Escuela Superior de Cómputo">ESCOM</abbr>
                </a>
            </p>
        </section>

    </footer>
</body>

</html>