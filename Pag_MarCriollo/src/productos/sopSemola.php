<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarCriollo</title>
    
    <!-- Estilos -->
    <link rel="stylesheet" href="../style/productos.css"> <!-- Modificar segun tu estillo (css)-->
    <link rel="icon" href="../img/favicon-32x32.png" type="/image/png">
</head>
<body>
    <header>
        <div class="contenedorhead">
            <div class="head">
                MarCriollo
            </div>
            <div class="logoprincipal">
                <img src="../img/crab.png" alt="Logo">
            </div>
        </div>
    </header>
    <nav class="navbar">
        <button id="menu-desplegable" class="menu-desplegable" aria-label="Menu Desplegable">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
        <ul class="opciones">
            <!-- Modificar -->
            <li><a id="no-seleccionado" href="../index.html">Inicio</a></li>
            <li><a id="no-seleccionado" href="../nosotros.html">Nosotros</a></li>
            <li><a id="no-seleccionado" href="../servicios.html">Servicios</a></li>
            <li><a id="no-seleccionado" href="../redessociales.html">Redes Sociales</a></li>
            <li><a id="no-seleccionado" href="../mapas.html">Mapas</a></li>
            <li><a id="no-seleccionado" href="../contacto.html">Contacto</a></li>
            <li><a id="no-seleccionado" href="../intranet.php">Intranet</a></li>
        </ul>
    </nav>
    <script src="../JavaScript/headerfooter.js"></script> <!-- Script para el funcionamiento de la Hamburguesa -->
    <main>
        <div class="productoCarta">
            <div class="ruletaProducto"> <!-- Ruleta de imagenes de referencia -->

                <div class="contenedorImg"><img src="../productos/img/sopSemola_N.png" alt="Imagen" loading="lazy" onclick="cambiarImagen(this)"></div>
                <div class="contenedorImg"><img src="../productos/img/sopSemola_A.png" alt="Imagen" loading="lazy" onclick="cambiarImagen(this)"></div>
                <div class="contenedorImg"><img src="../productos/img/print_Lomo.png" alt="Imagen" loading="lazy" onclick="cambiarImagen(this)"></div>
                
            </div>
            <div class="imgProducto">
                <div class="conImagen">
                    <img src="../productos/img/sopSemola_N.png" id="imagen-grande" alt="Imagen">
                </div>
            </div>
            <div class="descProducto">
                <div class="tipo"><h2>Plato de Entrada</h2></div>
                <div class="titulo"><h2>Sopa de Semola con Pollo</h2></div>
                <div class="descripcion"><p>Cada cucharada de nuestra sopa te envolverá en una sensación de confort y satisfacción. El aroma tentador que emana de cada plato te transportará a los recuerdos más cálidos de la infancia, mientras que la suavidad de la sémola cocida a la perfección acariciará tu paladar con cada bocado. <br><br>
                Pero lo que realmente distingue a nuestra sopa de sémola es su sabor inigualable. El caldo, preparado con vegetales frescos y hierbas aromáticas, es el lienzo perfecto para resaltar el sabor de la sémola y crear una armonía de sabores que te dejará con ganas de más.</p></div>
                <div class="conPrecio">
                    <div class="precioRegular">
                        <div class="titPrecio"><h2>Precio Regular:</h2></div>
                        <div class="precio"><h2>S/8.99</h2></div>
                    </div>
                    <div class="precioOnline">
                        <div class="titPrecio"><h2>Precio Online:</h2></div>
                        <div class="precio"><h2>S/5.99</h2></div>
                    </div>
                </div>
                <div class="conBoton">
                    <a class="botonPedir" href="../carrito.html">pedir ahora</a>
                </div>
            </div>
        </div>
        <div class="linea-separadora"><hr></div>
        <div class="conMain-Descripcion">
            <div class="item">
                <div class="con-img"><img src="../productos/img/ico_pollo.png" alt="Imagen"></div>
                <h1>Pollo Tierno, Sabor Reconfortante</h1>
                <P>Tiernos trozos de pollo cocidos a la perfección, aportando un sabor reconfortante y delicioso a nuestra sopa de sémola.</P>
            </div>
            <div class="item">
                <div class="con-img"><img src="../productos/img/ico_semilla.png" alt="Imagen"></div>
                <h1>Sémola Suave, Textura Perfecta</h1>
                <P>Sémola de alta calidad que se cocina suave y esponjosa, proporcionando una textura perfecta que complementa el caldo.</P>
            </div>
            <div class="item">
                <div class="con-img"><img src="../productos/img/ico_verdura.png" alt="Imagen"></div>
                <h1>Vegetales Frescos, Nutrición y Color</h1>
                <P>Una mezcla de vegetales frescos que añaden nutrición, color y un toque de frescura a cada cucharada.</P>
            </div>
        </div>
        <div class="linea-separadora"><hr></div>

        <!-- .ConMain-Ruleta. Clase con-textRuleta fuera de .conMain-Ruleta -->
        <div class="con-textRuleta">Clientes que vieron este plato también vieron:</div>
        <div class="conMain-Ruleta">
            <!--
                Ahora Js genera los contenedores (Tarjeta)
                const numContenedores = 3; <- Cambia este número para generar más contenedores
            -->
        </div>
    </main>
    <script src="../JavaScript/producto.js"></script>
    <footer>
        <section id="redes">
            <a href="https://www.instagram.com/">
                <img src="../img/logoig.png" alt="Instagram"></a>
                    <a href="https://twitter.com/">
                <img src="../img/logotw.png" alt="Twitter"></a>
                    <a href="https://Facebook.com/">
                <img src="../img/face.png" alt="Facebook"></a>
        </section>
        Jirón Salaverry 110 Magdalena del Mar Municipalidad Metropolitana de Lima LIMA, 17
        <section id="licencias">
            <a href="https://www.google.com/">Terminos y Condiciones</a>
            <br>
            <a href="https://www.google.com/">Política de Privacidad</a>
        </section>
        <section id="contacto">
            <a href="tel:+51950661842">
                <img src="../img/telef.png" alt="Telefono">
                +51 950 661 842
            </a>
            <a href="mailto:MarCriollo@gmail.com">
                <img src="../img/correo.png" alt="Correo">
                MarCriollo@gmail.com
            </a>                
        </section>
        &copy; 2024 Creado por Grupo
    </footer>
</body>
</html>