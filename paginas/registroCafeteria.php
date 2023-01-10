<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Poli Coff</title>
    <link href="../estilo/registroProCaf.css" type="text/css" rel="stylesheet">
    <link rel="icon" href="../iconos/LOGOTIPO-05.png">

    <script type="text/javascript" src="../scripts/FileInputController.js"></script>

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
            <div id="usuarioPerfil">
                <a href="../paginas/perfilUsuario.php" id="PerfilUsuario">Mi perfil</a>
                <img id="iconoUsuario" alt="iconoUsuario" src="../iconos/iconoUsuario.jpg">
            </div>
        </section>

        <section class="RegistroProducto">

            <p id="tituloRegProducto">Registro de Cafeteria</p>

            <p id="MensajeAdmi">Cada solicitud de ingreso de producto sera evaluada por un administrador y en caso de
                ser apectada se reflejara la informacion en la plataforma</p>

            <form id="registroPro" name="registroPro" action="" method="post" enctype="multipart/form-data" autocomplete="on">

                <div class="registroCaf">
                    <?php
                    include("../phpBack/con_db.php");
                    include("../phpBack/regCafeteria.php");

                    ?>
                    <label for="DatosGenerales">Datos Generales:</label>
                    <input type="text" id="DatosGenerales" name="DatosGenerales" size="30" maxlength="30" placeholder="Nombre de la cafeteria" required=""><br>

                    <div id="cajaCfeteria">

                        <label for="Categoria"></label>
                        <input type="text" id="Categoria" name="Categoria" size="30" maxlength="30" placeholder="Ubicación:" required=""><br>

                        <label for="Institucion"></label>
                        <input type="text" id="Institucion" name="Institucion" size="30" maxlength="30" placeholder="Institución:" required=""><br>

                        <label for="Proveedor"></label>
                        <input type="text" id="Proveedor" name="Proveedor" size="30" maxlength="30" placeholder="Proveedor:" required=""><br>

                    </div>

                    <div id="cajaAgreImg">

                        <input type="file" id="subImagen" name="imagen">

                    </div>

                </div>

                <div id="botonSecion">
                    <input type="submit" value="Enviar" name="Enviar" id="botonenvio">
                </div>

            </form>

        </section>

    </main>
    <footer>
        <section id="pie">
            <h4>Acerca de la pagina</h4>
            <h4>Equipo 6 del 6CV1 Curso Ingenieria de Software</h4>
            <p>Esta pagina fue elaborada por alumnos de la
                <a href="https://www.escom.ipn.mx/" target="_blank" title="ESCOM" id="ESCOM">
                    <abbr title="Escuela Superior de Cómputo">ESCOM</abbr>
                </a>
            </p>
        </section>

    </footer>
</body>

</html>