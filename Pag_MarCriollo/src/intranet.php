<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarCriollo</title>
    <link rel="stylesheet" href="style/intranet.css">
    <link rel="icon" href="img/favicon-32x32.png" type="image/png">
    <script src="https://kit.fontawesome.com/d2b7381cec.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="contenedorhead">
            <div class="head">
                MarCriollo
            </div>
            <div class="logoprincipal">
                <img src="img/crab.png" alt="Logo">
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
            <li><a id="no-seleccionado" href="index.html">Inicio</a></li>
            <li><a id="no-seleccionado" href="nosotros.html">Nosotros</a></li>
            <li><a id="no-seleccionado" href="servicios.html">Servicios</a></li>
            <li><a id="no-seleccionado" href="redessociales.html">Redes Sociales</a></li>
            <li><a id="no-seleccionado" href="mapas.html">Mapas</a></li>
            <li><a id="no-seleccionado" href="contacto.html">Contacto</a></li>
            <li><a id="seleccionado" href="intranet.php">Intranet</a></li>
        </ul>
    </nav>
    <script src="JavaScript/headerfooter.js"></script>
    <main id="main" class="main">
        <div class="contenedor" id="contenedor">
            <div class="form-contenedor crear-cuenta">
                <form action="" method="post" class="formulario">
                    <h1>Create una Cuenta</h1>
                    <?php
                    include("PHP/conexion.php");
                    include("PHP/registrar.php");
                    ?>
                    <div class="social-iconos">
                        <a href="#" class="iconos">
                            <i class="fa-brands fa-google-plus-g"></i>
                        </a>
                        <a href="#" class="iconos">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#" class="iconos">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="#" class="iconos">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                    <span>O usa tu correo y contraseña</span>
                    <input type="name" name="nombres" id="nombres" placeholder="Nombres y Apellidos">
                    <input type="direccion" name="direccion" id="direccion" placeholder="Direccion">
                    <select id="distritos" name="distritos">
                        <option value="">Distrito</option>
                        <option value="Ancón">Ancón</option>
                        <option value="Ate">Ate</option>
                        <option value="Barranco">Barranco</option>
                        <option value="Breña">Breña</option>
                        <option value="Carabayllo">Carabayllo</option>
                        <option value="Chaclacayo">Chaclacayo</option>
                        <option value="Chorrillos">Chorrillos</option>
                        <option value="Cieneguilla">Cieneguilla</option>
                        <option value="Comas">Comas</option>
                        <option value="El Agustino">El Agustino</option>
                        <option value="Independencia">Independencia</option>
                        <option value="Jesús María">Jesús María</option>
                        <option value="La Molina">La Molina</option>
                        <option value="La Victoria">La Victoria</option>
                        <option value="Lince">Lince</option>
                        <option value="Los Olivos">Los Olivos</option>
                        <option value="Lurigancho">Lurigancho</option>
                        <option value="Lurín">Lurín</option>
                        <option value="Magdalena del Mar">Magdalena del Mar</option>
                        <option value="Miraflores">Miraflores</option>
                        <option value="Pachacámac">Pachacámac</option>
                        <option value="Pucusana">Pucusana</option>
                        <option value="Pueblo Libre">Pueblo Libre</option>
                        <option value="Puente Piedra">Puente Piedra</option>
                        <option value="Punta Hermosa">Punta Hermosa</option>
                        <option value="Punta Negra">Punta Negra</option>
                        <option value="Rímac">Rímac</option>
                        <option value="San Bartolo">San Bartolo</option>
                        <option value="San Borja">San Borja</option>
                        <option value="San Isidro">San Isidro</option>
                        <option value="San Juan de Lurigancho">San Juan de Lurigancho</option>
                        <option value="San Juan de Miraflores">San Juan de Miraflores</option>
                        <option value="San Luis">San Luis</option>
                        <option value="San Martín de Porres">San Martín de Porres</option>
                        <option value="San Miguel">San Miguel</option>
                        <option value="Santa Anita">Santa Anita</option>
                        <option value="Santa María del Mar">Santa María del Mar</option>
                        <option value="Santa Rosa">Santa Rosa</option>
                        <option value="Santiago de Surco">Santiago de Surco</option>
                        <option value="Surquillo">Surquillo</option>
                        <option value="Villa El Salvador">Villa El Salvador</option>
                        <option value="Villa María del Triunfo">Villa María del Triunfo</option>
                    </select>
                    <input type="email" name="correo" id="correo" placeholder="Correo">
                    <input type="password" name="password" id="password" placeholder="Contraseña">
                    <input type="password" name="password2" id="password2" placeholder="Repetir Contraseña">
                    <button name="registrar">Registrarse</button>
                </form>
            </div>
            <div class="form-contenedor iniciar-sesion">
                <form action="" method="post" class="formulario">
                    <h1>Inicia Sesion</h1>
                    <div class="social-iconos">
                        <a href="#" class="iconos">
                            <i class="fa-brands fa-google-plus-g"></i>
                        </a>
                        <a href="#" class="iconos">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#" class="iconos">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="#" class="iconos">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                    <span>Usa tu correo y contraseña</span>
                    <input type="email" name="correo" placeholder="Correo">
                    <input type="password" name="password" placeholder="Contraseña">
                    <a href="#">Olvidaste tu contraseña?</a>
                    <button name="iniciar">Iniciar Sesion</button>
                </form>
            </div>
            <div class="cambiar-contenedor">
                <div class="cambiar">
                    <div class="cambiar-panel cambiar-izquierda">
                        <h1>Bienvenido!</h1>
                        <p>Ingresa todos tus datos correspondientes</p>
                        <button class="ocultar" id="login">Iniciar Sesion</button>
                    </div>
                    <div class="cambiar-panel cambiar-derecha">
                        <h1>Buen Dia!</h1>
                        <p>Registra todos tus datos!</p>
                        <button class="ocultar" id="register">Registrarse</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="JavaScript/intranet.js"></script>
    <footer>
        <section id="redes">
            <a href="https://www.instagram.com/">
                <img src="img/logoig.png" alt="Instagram"></a>
            <a href="https://twitter.com/">
                <img src="img/logotw.png" alt="Twitter"></a>
            <a href="https://Facebook.com/">
                <img src="img/face.png" alt="Facebook"></a>
        </section>
        Jirón Salaverry 110 Magdalena del Mar Municipalidad Metropolitana de Lima LIMA, 17
        <section id="licencias">
            <a href="https://www.google.com/">Terminos y Condiciones</a>
            <br>
            <a href="https://www.google.com/">Política de Privacidad</a>
        </section>
        <section id="contacto">
            <a href="tel:+51950661842">
                <img src="img/telef.png" alt="Telefono">
                +51 950 661 842
            </a>
            <a href="mailto:MarCriollo@gmail.com">
                <img src="img/correo.png" alt="Correo">
                MarCriollo@gmail.com
            </a>
        </section>
        &copy; 2024 Creado por Grupo
    </footer>
</body>

</html>