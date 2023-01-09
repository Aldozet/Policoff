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
                <img id="logo2" alt="logoNombre" src="../iconos/LOGOTIPO-06.png" usemap="#Policoff">
                <map name="#Policoff">
                    <area shape="rect" coords="0,0,250,50" alt="Poli Coff" href="../index.html" title="Poli Coff">
                </map>
            </div>
            <div id="inicioRegistro">
                <a href="../paginas/inicioSesion.html" /*target="conDinamico" */ id="IniciarSesion">Iniciar sesión</a>
                <a href="../paginas/registroUsuario.html" /*target="conDinamico" */ id="Registro">Registro</a>
            </div>
        </section>
        <section>
            <div id="secInfo1">
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
                                //$query = "SELECT nombre,imagen FROM cafeteria where nombre = 'nombre';"; nombre seleccionado de una opcion previas

                                $res = mysqli_query($connection, $query);
                                while ($row = mysqli_fetch_assoc($res)) {
                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $row['nombre']; ?>
                                        </td>
                                        <td>
                                        <img width="100" src="data:<?php echo $row['nombre']; ?>;base64,<?php echo  base64_encode($row['imagen']); ?>">

                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>

            </div>
            <div id="secInfo2">

            </div>
            <div id="secInfo3">

            </div>
            <div id="secInfo4">
                
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