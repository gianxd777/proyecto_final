<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Licorería La Botella Borracha</title>
    <link rel="stylesheet" href="carrito.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="carrito.js" defer></script>
    <link rel="icon" href="img/logo.jpg" type="image/png">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Barra de Navegación -->
    <header>
        <a href="carrito.html">
            <img src="img/logo.jpg" alt="Licorería La Botella Borracha" class="logo">
        </a>

        <nav id="menu">
            <a href="inicio.php">INICIO</a>
            <a href="whisky.php">Whisky</a>
            <a href="ron.php">Ron</a>
            <a href="vodka.php">Vodka</a>
            <a href="vinos.php">Vinos</a>
            <a href="gaseosas.php">Gaseosas</a>
            <a href="tradicionales.php">Tradicionales</a>
            <a href="cervezas.php">Cervezas</a>
            <a href="combos.php">Combos</a>
            <a href="perfil.php">BLOG</a>
        </nav>
        <div class="cart-icon" onclick="toggleCart()">🛒</div>
    </header>

    <!-- Carrusel de Imágenes -->
    <section id="carousel">
        <div class="carousel-container">
            <div class="carousel-slide">
                <img src="img/1.png" alt="Promoción 1">
                <img src="img/2.png" alt="Promoción 2">
                <img src="img/1.png" alt="Promoción 3">
                <img src="img/2.png" alt="Promoción 4">
            </div>
        </div>
        <button class="carousel-prev" onclick="prevSlide()">&#10094;</button>
        <button class="carousel-next" onclick="nextSlide()">&#10095;</button>
    </section>

    <!-- Sección de Promociones -->
    <section id="promociones">
        <h2>Promociones</h2>
        <div class="product-list">
            <!-- Producto 1 -->
            <div class="product">
                <img src="img/20107245.webp" alt="Producto 1">
                <div class="product-info">
                    <h3>OLD TIMES Red</h3>
                    <p>Botella 750ml</p>
                    <span class="price-old">s/30.00</span>
                    <span class="price-new">s/25.00</span>
                    <button onclick="addToCart(1, 'OLD TIMES Red', 'Botella 750ml', 25.00)">Agregar al carrito</button>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="product">
                <img src="img/20107249 bkavk.webp" alt="OLD TIMES Black">
                <div class="product-info">
                    <h3>OLD TIMES Black</h3>
                    <p>Botella 750ml</p>
                    <span class="price-old">s/35.00</span>
                    <span class="price-new">s/30.00</span>
                    <button onclick="addToCart(2, 'OLD TIMES Black', 'Botella 750ml', 30.00)">Agregar al carrito</button>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="product">
                <img src="img/oso.png" alt="Oso Polar">
                <div class="product-info">
                    <h3>Oso Polar</h3>
                    <p>Botella 750ml</p>
                    <span class="price-old">s/30.00</span>
                    <span class="price-new">s/25.00</span>
                    <button onclick="addToCart(3, 'Oso Polar', 'Botella 750ml', 25.00)">Agregar al carrito</button>
                </div>
            </div>
            <!-- Producto 4 -->
            <div class="product">
                <img src="img/20205639pilsen.webp" alt="Six PILSEN Lata">
                <div class="product-info">
                    <h3>Six PILSEN Lata</h3>
                    <p> 473ml Paquete 6un</p>
                    <span class="price-old">s/36.00</span>
                    <span class="price-new">s/30.00</span>
                    <button onclick="addToCart(4, 'PILSEN Lata', ' 473ml Paquete 6un', 30.00)">Agregar al carrito</button>
                </div>
            </div>
            <!-- Producto 5 -->
            <div class="product">
                <img src="img/408462russkaya.webp" alt="RUSSKAYA">
                <div class="product-info">
                    <h3>RUSSKAYA</h3>
                    <p>Botella 750ml</p>
                    <span class="price-old">s/30.00</span>
                    <span class="price-new">s/25.00</span>
                    <button onclick="addToCart(5, 'RUSSKAYA', 'Botella 750ml', 50.00)">Agregar al carrito</button>
                </div>
            </div>
            <!-- Producto 6 -->
            <div class="product">
                <img src="img/755306 corona.webp" alt="CORONA Extra">
                <div class="product-info">
                    <h3>Six CORONA Extra</h3>
                    <p>Botella 330ml 6und</p>
                    <span class="price-old">s/50.00</span>
                    <span class="price-new">s/45.00</span>
                    <button onclick="addToCart(6, 'Six CORONA Extra', 'Botella 330ml 6und', 45.00)">Agregar al carrito</button>
                </div>
            </div>
            <!-- Producto 7 -->
            <div class="product">
                <img src="img/77548382 cigarro.webp" alt="LUCKY STRIKE Mora">
                <div class="product-info">
                    <h3>LUCKY STRIKE Mora</h3>
                    <p>Cigarro 1 und</p>
                    <span class="price-old">s/3.00</span>
                    <span class="price-new">s/2.00</span>
                    <button onclick="addToCart(7, 'Producto 7', 'Cigarro 1 und', 2.00)">Agregar al carrito</button>
                </div>
            </div>
            <!-- Producto 8 -->
            <div class="product">
                <img src="img/20091940 mkalboto.webp" alt="Marlboro Canela">
                <div class="product-info">
                    <h3>Marlboro Canela</h3>
                    <p>Cigarro 1 und</p>
                    <span class="price-old">s/3.00</span>
                    <span class="price-new">s/2.50</span>
                    <button onclick="addToCart(8, 'Marlboro Canela', 'Cigarro 1 und', 2.50)">Agregar al carrito</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Carrito de Compras -->
    <div id="cart" class="cart-overlay">
        <div class="cart-content">
            <h2>Carrito de Compras</h2>
            <div class="cart-items-container">
                <ul id="cart-items"></ul>
            </div>
            <div class="cart-summary">
                <span>Total:</span> <span id="total-price">$0.00</span>
            </div>
            <button class="checkout-btn" onclick="checkout()">COMPRAR</button>
            <button onclick="toggleCart()">Cerrar</button>
        </div>
    </div>

    <!-- Espacio para promociones -->
    <section id="espacio-promociones">
        <h2>¡No te pierdas nuestras promociones!</h2>
    </section>

    <!-- Cerrar Sesión -->
    <div class="container">
        
        <a href="CerrarSesion.php" class="btn btn-danger">Cerrar Sesión</a>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section about">
                <h3>Sobre Nosotros</h3>
                <p>Somos una tienda en línea dedicada a ofrecer los mejores productos con la mejor calidad. Nuestra misión es brindarte una experiencia de compra excepcional.</p>
            </div>

            <div class="footer-section links">
                <h3>Enlaces Rápidos</h3>
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#productos">Productos</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                    <li><a href="#sobre-nosotros">Sobre Nosotros</a></li>
                </ul>
            </div>

            <div class="footer-section contact">
                <h3>Contacto</h3>
                <p><strong>Dirección:</strong> <a href="https://maps.app.goo.gl/voAjdeBTwwdAmUVH8" target="_blank">Local Principal</a></p>
                <p><strong>Teléfono:</strong> 926 727 267</p>
                <p><strong>Email:</strong> licoreria.la.botella.borracha1@gmail.com</p>
            </div>

            <div class="footer-section social-media">
                <h3>Síguenos</h3>
                <a href="https://www.facebook.com/profile.php?id=100066950823371" target="_blank">Facebook</a>
                <a href="https://www.tiktok.com/@la.botella.borracha?is_from_webapp=1&sender_device=pc" target="_blank">Tik Tok</a>
                <a href="https://www.instagram.com/la.botella.borracha?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">Instagram</a>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2024 The Systems House. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Bootstrap JS (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybFjcJ7pQ2fa5+z6zVjr6bCDjQIVIl94A0J6uBvQckB5fuYl4X" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0gVf8Qp5L6dVh8yL4d9vJwKlQdH5yQhHhZR1QkD6Bld0sI0v" crossorigin="anonymous"></script>
</body>

</html>
