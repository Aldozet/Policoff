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
                        <area shape="circle" coords="0,0,300," alt="Poli Coff" href="../index.html" title="Poli Coff">
                    </map>
                </div>
            </div>
            <div>
                <img id="logo2" alt="logoPrincipal" src="../iconos/LOGOTIPO-06.png" usemap="#Policoff">
                <map name="#Policoff">
                    <area shape="rect" coords="0,0,250,50" alt="Poli Coff" href="../index.html" title="Poli Coff">
                </map>
            </div>
            <div id="inicioRegistro">
                <a href="../index.html" */ id="Registro">Cerrar Sesion</a>
            </div>
        </section>

        <section></section>

        <?php session_start();
        include("../phpBack/con_db.php");

        $correo = $_SESSION['correo'] = 'vanepoli@ipn.mx';
        $_SESSION['nombre'] = 'Vanesa';


        echo "Bienvenida  " . $_SESSION['correo'];
        echo "Bienvenida  " . $_SESSION['nombre'];

        // Select data from the database using the value of the session variable
        $sql = "SELECT idUsuario, nombre, apellidoMaterno, apellidoPaterno, correoInstitucional, tipo, nombreUsuario FROM usuario WHERE correoInstitucional = '$correo'";
        $result = mysqli_query($conn, $sql);

        // Loop through the result set and output the data
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['idUsuario'] . ' ' . $row['nombre'] . '' . $row['apellidoMaterno'] . '' . $row['apellidoPaterno'] . '' . $row['correoInstitucional'] . '' . $row['tipo'] . '' . $row['nombreUsuario'];
            echo "<br>";
        }

        ?>

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