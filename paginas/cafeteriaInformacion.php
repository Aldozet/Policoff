<?php
session_start();
if (isset($_SESSION['nombreUsuario'])) {
    $loginLink = "<a href='../index.php?logout' id='CerrarSesion'>Cerrar sesión</a>";
} else {
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
                        <area shape="circle" coords="0,0,300," alt="Poli Coff" href="./principal.php" title="Poli Coff">
                    </map>
                </div>
            </div>
            <div>
                <img id="logo2" alt="logoNombre" src="../iconos/LOGOTIPO-06.png" usemap="#Policoff">
                <map name="#Policoff">
                    <area shape="rect" coords="0,0,250,50" alt="Poli Coff" href="./principal.php" title="Poli Coff">
                </map>
            </div>
            <div id="caja1">
                <div id="usuarioPerfil">
                    <a href="../paginas/perfilUsuario.php" id="PerfilUsuario">Mi perfil</a>

                </div>
                <div id="inicioRegistro">
                    <?php echo $loginLink; ?>
                </div>
            </div>
        </section>
        <section id="SecSup">
            <?php
            include("../phpBack/con_db.php");
            include("../phpBack/evaluar.php");
            $cafe = $_GET['id'];
            $query = "SELECT idCafeteria,nombre,imagen,proveedor, escuela FROM cafeteria WHERE idCafeteria = $cafe;";
            $query3 = "SELECT idProducto, nombre, imagen, precio, tipo, descripcion FROM producto";
            //$query = "SELECT nombre,imagen FROM cafeteria where nombre = 'nombre';"; nombre seleccionado de una opcion previas


            $res = mysqli_query($conex, $query);
            while ($row = mysqli_fetch_assoc($res)) {
                $idCafeteria =  $row['idCafeteria'];
            ?>

                <div id="secInfo1">

                    <div id="tituloCafeteria"><?php echo $row['nombre']; ?></div>
                    <br>

                    <div id="myBtn">Evaluar</div>
                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <form id="evaluar" name="evaluar" action="" method="post" enctype="multipart/form-data">
                                <label>Servicio:</label>
                                <br>
                                <label for="srv1">1</label>
                                <input type="radio" name="servicio" value="1" id="srv1">
                                <label for="srv2">2</label>
                                <input type="radio" name="servicio" value="2" id="srv2">
                                <label for="srv3">3</label>
                                <input type="radio" name="servicio" value="3" id="srv3">
                                <label for="srv4">4</label>
                                <input type="radio" name="servicio" value="4" id="srv4">
                                <label for="srv5">5</label>
                                <input type="radio" name="servicio" value="5" id="srv5">
                                <br>
                                <label>Comida:</label>
                                <br>
                                <label for="com1">1</label>
                                <input type="radio" name="comida" value="1" id="com1">
                                <label for="com2">2</label>
                                <input type="radio" name="comida" value="2" id="com2">
                                <label for="com3">3</label>
                                <input type="radio" name="comida" value="3" id="com3">
                                <label for="com4">4</label>
                                <input type="radio" name="comida" value="4" id="com4">
                                <label for="com5">5</label>
                                <input type="radio" name="comida" value="5" id="com5">
                                <br>
                                <label>Precios:</label>
                                <br>
                                <label for="pre1">1</label>
                                <input type="radio" name="precios" value="1" id="pre1">
                                <label for="pre2">2</label>
                                <input type="radio" name="precios" value="2" id="pre2">
                                <label for="pre3">3</label>
                                <input type="radio" name="precios" value="3" id="pre3">
                                <label for="pre4">4</label>
                                <input type="radio" name="precios" value="4" id="pre4">
                                <label for="pre5">5</label>
                                <input type="radio" name="precios" value="5" id="pre5">
                                <br>
                                <label for="comentario">comentario:</label>
                                <input type="text" id="comentario" name="comentario" size="60" maxlength="100" placeholder=""><br>

                                <br>
                                <input type="submit" value="Enviar">
                            </form>
                        </div>
                    </div>
                    <script>
                        // Obtén la referencia al botón y al modal
                        var btn = document.getElementById("myBtn");
                        var modal = document.getElementById("myModal");

                        // Obtén la referencia al botón de cerrar
                        var span = document.getElementsByClassName("close")[0];

                        // Cuando el usuario haga clic en el botón, muestra el modal
                        btn.onclick = function() {
                            modal.style.display = "block";
                        }

                        // Cuando el usuario haga clic en el botón de cerrar, oculta el modal
                        span.onclick = function() {
                            modal.style.display = "none";
                        }

                        window.onclick = function(event) {
                            if (event.target == modal) {
                                modal.style.display = "none";
                            }
                        }
                    </script>
                </div>

                <div id="secInfo2">
                    <p class="titsec">Información General</p>
                    <div id="secCom2">
                        <div class="sec2in"><?php echo $row['Categoria'] = 'cafeteria'; ?></div>
                        <div class="sec2in"><?php echo $row['escuela']; ?></div>
                        <div class="sec2in"><?php echo $row['ClaGen'] = '5'; ?></div>
                        <div class="sec2in"><?php echo $row['proveedor']; ?></div>
                    </div>
                </div>
            <?php
            }
            ?>


            <div id="secInfo3">
                <p class="titsec">Evaluaciones y comentarios</p>
                <?php
                $query2 = "SELECT idEvaluacion, fk_producto, fk_cafeteria, fk_usuario, servicio, comida, precio, comentario, fecha FROM evalua WHERE fk_cafeteria = $idCafeteria;";
                $res2 = mysqli_query($conex, $query2);
                while ($row = mysqli_fetch_assoc($res2)) {
                ?>

                    <div id="evapunt">
                        <?php echo $row['servicio']; ?>
                        <?php echo $row['comida']; ?>
                        <?php echo $row['precio']; ?>
                        <div>

                        </div>
                    </div>


                <?php
                }
                ?>
            </div>

            <div id="secInfo4">
                <p class="titsec">Productos</p>
                <div id="ordenproducto">
                    <?php
                    $res3 = mysqli_query($conex, $query3);
                    while ($row = mysqli_fetch_assoc($res3)) {
                    ?>
                        <div class="cajaProductos">
                            <div class="cajaImagen">
                             <img  width="90%" src="data:<?php echo $row['nombre']; ?>;base64,<?php echo  base64_encode($row['imagen']); ?>">   
                            </div>
                            <br>
                            <div class="cajaNombre">
                            <?php echo $row['nombre']; ?>    
                            </div>
                            <br>
                            <div class="cajainterior">
                                <p>Descripcion:</p>
                                <?php echo $row['descripcion']; ?>
                                <br>
                                <?php echo "Precio: " . $row['precio']."$"; ?>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
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