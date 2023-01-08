<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Poli Coff</title>
    <link href="../estilo/estiloSesion.css" type="text/css" rel="stylesheet">
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
                <a href="../paginas/registroUsuario.html" /*target="conDinamico" */ id="Registro">Registro</a>
            </div>
        </section>

        <section class="FormSecion">
            <form id="inicioSesion" name="inicioSesion" action="../paginas/respuesta.php" method="post"
                enctype="multipart/form-data" autocomplete="on">

                <img id="iconoUsuario" alt="iconoUsuario" src="../iconos/iconoUsuario.jpg">

                <p id="tituloinicioSecion">Iniciar sesión</p>
                
                <label for="usuario"></label>
                <input type="text" id="usuario" name="usuario" size="30" maxlength="30" placeholder="Usuario"
                    required=""><br>

                <label for="contraseñaUsuario"></label>
                <input type="password" name="contraseñaUsuario" id="contraseñaUsuario"
                    placeholder="contraseña" maxlength="25" size="30" required=""> <br>

                <div id="botonSecion">
                    <input type="submit" value="Acceder" name="Enviar" id="botonenvio">
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