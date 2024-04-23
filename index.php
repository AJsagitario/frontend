<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha384-fvqPFVBs2rFUuG7MyX6v33YmBFO4tYWU2FV2Nqj1FmRPQ5llhzn8dEdRvi2KLHKL" crossorigin="anonymous">

        <!-- Incluir Font Awesome utilizando un CDN -->        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <title>AJ ZONE</title>
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/png" href="i mg/logo-removebg-preview_1.png"/> 
        <script src="Slider/jquery-3.5.1.min.js" type="text/javascript"></script>

        <link href="Slider/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link href="Slider/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
        <script src="Slider/owl.carousel.min.js" type="text/javascript"></script>
    </head>
    <body>
        <header>
            <div class="contenedor-flex">
                <!-- Logo -->
                <img src="img/logo-removebg-preview_1.png" alt="Logo"/>
                <!-- Barra de búsqueda -->
                <form id="search-form">
                    <input type="text" id="search-input" placeholder="Escribe el producto que deseas">
                    <button type="submit">Buscar</button>
                </form>
                <!-- Resultado de la búsqueda -->
                <div id="search-results">
                    <!-- Aquí se mostrarán los resultados o "SIN RESULTADOS" -->
                </div>
                <!-- Opción de "Entrar o Registrarte" -->
                <div id="login-register">
                    <h2>Entrar / Regístrate</h2>
                    <form id="login-form" action="login.php" method="post">
                        <input type="email" name="email" placeholder="Correo electrónico" required>
                        <input type="password" name="contrasena" placeholder="Contraseña" required>
                        <button type="submit">Iniciar Sesión</button>
                    </form>
                    <p>¿No tienes una cuenta? <a href="FORM_REGIS.php" id="form_regis">Regístrate aquí</a></p>

                </div>
                <!-- Carrito de compras -->
                <h2><span id="carrito-count"><i class="fas fa-shopping-cart"></i> 0</span></h2>
                <div id="carrito" class="carrito-list">
                    <!-- El carrito estará oculto inicialmente -->
                    <div id="carrito-items">
                        <!-- Aquí se mostrarán los juegos en el carrito -->
                    </div>
                    <button onclick="ocultarCarrito()">Cerrar Carrito</button>
                </div>
                <p>Total: S/<span id="total">0.00</span></p>
                <button onclick="mostrarCarrito()">Ver Carrito</button>
                <button onclick="realizarCompra()">Realizar Compra</button>
                <!-- Redes sociales -->
                <ul class="redes-sociales">
                    <li><a href="https://www.facebook.com/AjLopezC"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/ajsagitario19/"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/Aj25644436"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
            <!-- Barra de navegación -->
            <ul class="menu">
                <li>
                    <a href="#">Videojuegos</a>
                    <ul class="submenu">
                        <li><a href="PS5.php">PS5</a></li>
                        <li><a href="PS4.php">PS4</a></li>
                        <li><a href="XBOX-SERIES.php">XBOX SERIES</a></li>
                        <li><a href="XBOX-ONE.php">XBOX ONE</a></li>
                        <li><a href="PC.php">PC</a>
                    </ul>
                </li>
                <li>
                    <a href="#">Accesorios</a>
                    <ul class="submenu">
                        <li><a href="MANDOS.php">MANDOS</a></li>
                        <li><a href="AURICULARES.php">AURICULARES</a></li>
                        <li><a href="MOUSES.php">MOUSES</a></li>
                        <li><a href="OTROS.php">OTROS</a></li>
                    </ul>
                </li>
                <li>
                    <a href="PRE VENTA.php"">Preventa</a>                  
                </li>
                <li>
                    <a href="LIQUIDACION.php">Liquidación</a>
                </li>
            </ul>           
        </header>
        <!-- Carrusel noticias -->  
        <h1>LO ÚLTIMO</h1>
        <div class="container">
            <div class="owl-carousel owl-theme blog-post">
                <div class="blog-content" data-aos="fade-right" data-aos-delay="50">
                    <img src="img/promo1.png" alt=""/>
                </div>                            
                <div class="blog-content" data-aos="fade-left" data-aos-delay="50">
                    <img src="img/promo2.png" alt=""/>
                </div>
                <div class="blog-content" data-aos="fade-down" data-aos-delay="50">
                    <img src="img/promo3.png" alt=""/>
                </div>
                <div class="blog-content" data-aos="fade-up" data-aos-delay="50">
                    <img src="img/promo4.png" alt=""/>
                </div>
            </div>                      
        </div>
        <h1>LO MÁS VENDIDO</h1>
        <main>
            <section class="product-list">
                <article class="product">
                    <img src="img/mas vendido1.png" alt=""/>
                    <h2>EA SPORTS 24</h2>
                    <p>Precio: S/259.00</p>
                    <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
                </article>
                <article class="product">
                    <img src="img/mas vendido2.png" alt=""/>
                    <h2>NBA 2K24</h2>
                    <p>Precio: S/219.90</p>
                    <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
                </article>
                <article class="product">
                    <img src="img/mas vendido3.png" alt=""/>
                    <h2>MORTAL KOMBAT 1</h2>
                    <p>Precio: S/208.00</p>
                    <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
                </article>
                <article class="product">
                    <img src="img/mas vendido4.png" alt=""/>
                    <h2>PAYDAY 3</h2>
                    <p>Precio: S/100.00</p>
                    <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
                </article>
                <article class="product">
                    <img src="img/mas vendido5.png" alt=""/>
                    <h2>STARFIELD</h2>
                    <p>Precio: S/249.00</p>
                    <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
                </article>
            </section>
        </main>
        <h1>ACCESORIOS</h1>
        <main>
            <section class="accesorios-list">
                <article class="accesorios">
                    <img src="img/accesorio1.png" alt=""/>
                    <h2>MOUSE GAMER</h2>
                    <p>Precio: S/125.00</p>
                    <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
                </article>
                <article class="accesorios">
                    <img src="img/accesorio2.png" alt=""/>
                    <h2>MANDO PS4</h2>
                    <p>Precio: S/93.00</p>
                    <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
                </article>
                <article class="accesorios">
                    <img src="img/accesorio3.png" alt=""/>
                    <h2>TECLADO GAMER</h2>
                    <p>Precio: S/196.00</p>
                    <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
                </article>
                <article class="accesorios">
                    <img src="img/accesorio4.png" alt=""/>
                    <h2>KIT GAMER</h2>
                    <p>Precio: S/269.00</p>
                    <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
                </article>
                <article class="accesorios">
                    <img src="img/accesorio5.png" alt=""/>
                    <h2>MANDO XBOX ONE</h2>
                    <p>Precio: S/194.00</p>
                    <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
                </article>
                <article class="accesorios">
                    <img src="img/accesorio6.png" alt=""/>
                    <h2>AUDÍFONOS GAMER</h2>
                    <p>Precio: S/89.00</p>
                    <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
                </article>
            </section>
        </main>
        <h1>JUEGOS EN LIQUIDACIÓN</h1>
        <main>
            <section class="liquidacion-list">
                <article class="liquidacion">
                    <img src="img/liquidacion1.png" alt=""/>
                    <h2>WWE 2K23</h2>
                    <p>Deluxe Edition</p>
                    <div class="circ-desc">-30%</div>
                    <span class="precio-orig">S/289.00</span>
                    <span class="desc-precio">S/202.30</span>
                    <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
                </article>
                <article class="liquidacion">
                    <img src="img/liquidacion2.png" alt=""/>
                    <h2>EA SPORTS 23</h2>
                    <div class="circ-desc">-50%</div>
                    <span class="precio-orig">S/254.00</span>
                    <span class="desc-precio">S/127.00</span>
                    <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
                </article>
                <article class="liquidacion">
                    <img src="img/liquidacion3.png" alt=""/>
                    <h2>COF WARZONE 2</h2>
                    <div class="circ-desc">-20%</div>
                    <span class="precio-orig">S/226.00</span>
                    <span class="desc-precio">S/180.80</span>
                    <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
                </article>
                <article class="liquidacion">
                    <img src="img/liquidacion4.png" alt=""/>
                    <h2>NFS UNBOUND PALACE</h2>
                    <div class="circ-desc">-35%</div>
                    <span class="precio-orig">S/155.00</span>
                    <span class="desc-precio">S/100.75</span>
                    <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
                </article>
                <article class="liquidacion">
                    <img src="img/liquidacion5.png" alt=""/>
                    <h2>FM 23</h2>
                    <div class="circ-desc">-10%</div>
                    <span class="precio-orig">S/189.00</span>
                    <span class="desc-precio">S/170.10</span>
                    <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
                </article>
                <article class="liquidacion">
                    <img src="img/liquidacion6.png" alt=""/>
                    <h2>NFL 24</h2>
                    <div class="circ-desc">-30%</div>
                    <span class="precio-orig">S/229.00</span>
                    <span class="desc-precio">S/160.30</span>
                    <button onclick="agregarAlCarrito(this)">Agregar al carrito</button>
                </article>
            </section>
        </main>
        <script src="Slider/slider.js" type="text/javascript"></script>
        <footer>
            <div class="footer-content">               
                <div class="links-foot">ENLACES
                    <ul>
                        <li><a href="PREGUNTAS FRECUENTES.php">Preguntas Frecuentes</a></li>
                        <li><a href="POLITICAS DE PRIV.php">Política de Privacidad</a></li>
                        <li><a href="CONTÁCTANOS.php">Contáctanos</a></li>  
                    </ul>
                </div>
                <div class="footer-nosotros">Acerca de Nosotros
                    <div class="logo-foot">
                        <img src="img/logo-removebg-preview_1.png" alt=""/>
                    </div>
                    <h2>Establecimiento especializado en la venta de videojuegos, 
                        consolas y complementos 
                        para las plataformas PS, XBOX y PC.</h2>
                    <div class="contact-foot">
                        <i class="fas fa-map-marker-alt"></i>
                        <li><a href="https://maps.app.goo.gl/aPsCQkUbnj6oZ5UP9">
                                Calle dignidad Mz BBB-5 Lot 22, Los Olivos</a></li>
                    </div>
                    <div class="contact-foot">
                        <i class="fas fa-envelope"></i>
                        <p>angellopezcardenas82@gmail.com
                        </p>
                    </div>
                    <div class="contact-foot">
                        <i class="fas fa-phone"></i>
                        <p>992245544</p>
                    </div>
                </div>
            </div>
            <div class="footer-disclaimer">
                &copy; 2023 AJ ZONE. Todos los derechos reservados.
            </div>
        </footer>
    </body>
    <script src="script/js.js" type="text/javascript"></script>
</html>
