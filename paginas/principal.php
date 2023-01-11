<?php
session_start();
if (isset($_SESSION['nombreUsuario'])) {
    $loginLink = "<a href='../index.php?logout' id='CerrarSesion'>Cerrar sesión</a>";
    $loginLink1 = "<a href='../paginas/perfilUsuario.php' id='PerfilUsuario'>Mi perfil</a>";
} else {
    $loginLink1 = "";
    $loginLink = "<a href='../paginas/inicioSesion.php' id='IniciarSesion'>Iniciar sesión</a>
                        <a href='../paginas/registroUsuario.php' id='Registro'>Registro</a>";
}
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: ../index.php");
}
?>
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
                <img id="logo2" alt="logoNombre" src="../iconos/LOGOTIPO-06.png" usemap="#Policoff">
                <map name="#Policoff">
                    <area shape="rect" coords="0,0,250,50" alt="Poli Coff" href="../paginas/principal.php" title="Poli Coff">
                </map>
            </div>
            <div id="caja1">
                <div id="usuarioPerfil">
                    <?php echo $loginLink1; ?>
                </div>
                <div id="inicioRegistro">
                    <?php echo $loginLink; ?>
                </div>
            </div>
        </section>


        <section>
            <img id="hamburguesa" alt="Hamburguesa" src="../imagenes/Web-Desing-20.png" usemap="Hamburguesa">
        </section>
        <section id="contenido">

            <section class="PagPrincipal">
                <?php
                include("../phpBack/con_db.php");
                $query = "SELECT idCafeteria, nombre, imagen FROM cafeteria;";
                $res = mysqli_query($conex, $query);
                while ($row = mysqli_fetch_assoc($res)) {
                ?>
                    <div class="marco">
                        <a id="htop3" href="../paginas/cafeteriaInformacion.php?id=<?php echo $row['idCafeteria']; ?>">
                            <img width="90%" src="data:<?php echo $row['nombre']; ?>;base64,<?php echo  base64_encode($row['imagen']); ?>">
                            <br>
                            <?php echo $row['nombre']; ?>
                        </a>
                    </div>
                <?php
                }
                ?>
            </section>

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