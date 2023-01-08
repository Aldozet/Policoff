<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Poli Coff</title>
    <link href="../estilo/estiloRegistro.css" type="text/css" rel="stylesheet">
    <link rel="icon" href="../iconos/LOGOTIPO-05.png">

</head>

<body>
    <header>
        
    </header>
    <main >
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
                    <a href="../paginas/inicioSesion.html" /*target="conDinamico" */ id="IniciarSesion">Iniciar sesión</a>
                </div>
            </section>
            <section class="FormReg">
                <form id="registroUsuario" name="registroUsuario" action="../paginas/respuesta.php" method="post"
                    enctype="multipart/form-data" autocomplete="on">
                    <!--enctype="multipart/form-data" en caso de requerir imagenes para que si es muy grande la segmente y envie-->
                    <p id="tituloregistro">Registro</p>
                    <label for="apellidoPaterno"></label>
                    <input type="text" id="apellidoPaterno" name="apellidoPaterno" size="30" maxlength="50"
                        placeholder="Apellido Paterno" required=""><br>
                
                    <label for="apellidoMaterno"></label>
                    <input type="text" id="apellidoMaterno" name="apellidoMaterno" size="30" maxlength="50"
                        placeholder="Apellido Materno" required=""><br>
                
                    <label for="nombreUsuario"></label>
                    <input type="text" id="nombreUsuario" name="nombreUsuario" size="30" maxlength="30" placeholder="Nombre"
                        required=""><br>
                
                    <label for="identificador"></label>
                    <input type="text" id="identificador" name="identificador" size="30" maxlength="20"
                        placeholder="Boleta/Numero de trabajador" required=""><br>
                
                
                    <label for="correoElectronico"></label>
                    <input type="email" id="correoElectronico" name="correoElectronico" size="30" placeholder="Correo Institucional"
                        list="listaformatos" required="">
                    <datalist>
                        <option>.com</option>
                        <option>.mx</option>
                        <option>.com.mx</option>
                        <option>.org</option>
                    </datalist><br>
                
                    <label for="usuario"></label>
                    <input type="text" id="usuario" name="usuario" size="30" maxlength="30" placeholder="Usuario" required=""><br>
                
                    <label for="contraseñaUsuario"></label>
                    <input type="password" name="contraseñaUsuario" id="contraseñaUsuario" placeholder="Ingrese una contraseña"
                        maxlength="25" size="30" required=""> <br>
                    
                    <input type="submit" value="Finalizar" name="Enviar" id="botonenvio">
                </form>
            </section>

            <?php
            
                include("./regUsuario.php");

            ?>

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