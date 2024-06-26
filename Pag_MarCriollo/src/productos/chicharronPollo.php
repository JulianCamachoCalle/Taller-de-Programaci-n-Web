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
            <li><a id="no-seleccionado" href="/index.html">Inicio</a></li>
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

                <div class="contenedorImg"><img src="../productos/img/chicharronPollo_N.png" alt="Imagen" loading="lazy" onclick="cambiarImagen(this)"></div>
                <div class="contenedorImg"><img src="../productos/img/chicharronPollo_A.png" alt="Imagen" loading="lazy" onclick="cambiarImagen(this)"></div>
                <div class="contenedorImg"><img src="../productos/img/print_Lomo.png" alt="Imagen" loading="lazy" onclick="cambiarImagen(this)"></div>
                
            </div>
            <div class="imgProducto">
                <div class="conImagen">
                    <img src="../productos/img/chicharronPollo_N.png" id="imagen-grande" alt="Imagen">
                </div>
            </div>
            <div class="descProducto">
                <div class="tipo"><h2>Plato Ejecutivo</h2></div>
                <div class="titulo"><h2>Chicharron de Pollo c/Papas</h2></div>
                <div class="descripcion"><p>El chicharrón de pollo es un plato tradicional y popular que consiste en trozos de pollo marinados, fritos hasta lograr una piel crujiente y dorada, mientras que el interior se mantiene jugoso y lleno de sabor. Esta delicia culinaria es perfecta como plato principal o como acompañamiento en cualquier comida.</p></div>
                <div class="conPrecio">
                    <div class="precioRegular">
                        <div class="titPrecio"><h2>Precio Regular:</h2></div>
                        <div class="precio"><h2>S/22.99</h2></div>
                    </div>
                    <div class="precioOnline">
                        <div class="titPrecio"><h2>Precio Online:</h2></div>
                        <div class="precio"><h2>S/19.99</h2></div>
                    </div>
                </div>
                <div class="conBoton">
                    <a class="botonPedir" href="../contacto.html">reservar ahora</a>
                </div>
            </div>
        </div>
        <div class="linea-separadora"><hr></div>
        <div class="conMain-Descripcion">
            <div class="item">
                <div class="con-img"><img src="../productos/img/ico_pollo.png" alt="Imagen"></div>
                <h1>Pollo Marinado y Crujiente</h1>
                <P>Trozos de pollo marinados con especias y condimentos, empanizados y fritos hasta alcanzar una textura exterior crujiente y dorada, manteniendo el interior jugoso y sabroso.</P>
            </div>
            <div class="item">
                <div class="con-img"><img src="../productos/img/ico_harina.png" alt="Imagen"></div>
                <h1>Sabor Intenso y Especiado</h1>
                <P>La marinada especial de especias y condimentos añade un sabor intenso y aromático al pollo, que se intensifica con el proceso de fritura, creando una explosión de sabores en cada bocado.</P>
            </div>
            <div class="item">
                <div class="con-img"><img src="../productos/img/ico_verdura.png" alt="Imagen"></div>
                <h1>Acompañamiento Tradicional</h1>
                <P>Acompañado tradicionalmente de papas fritas doradas y una ensalada fresca de repollo y zanahoria rallada, que equilibran la textura crujiente del chicharrón de pollo con un toque de frescura y crocancia.</P>
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