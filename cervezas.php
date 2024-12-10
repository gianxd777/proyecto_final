<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cervezas</title>
    <link rel="stylesheet" href="carrito.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="carrito.js" defer></script>
    <link rel="icon" href="img/logo.jpg" type="image/png">
</head>
<body>
    <!-- Barra de Navegación -->
    <header>
        <a href="carrito.html">
            <img src="img/logo2.png" alt="Licorería La Botella Borracha" class="logo">
        </a>
        <div class="menu-toggle" id="menu-toggle">
            <img src="img/menu-icon.png" alt="Menú">
        </div>
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
    

    <!-- Sección de Promociones -->
    <section id="promociones">
        <h2></h2>
        <div class="product-list">
            <!-- Producto 1 -->
            
            <!-- Producto 2 -->
            
            <!-- Producto 3 -->
            <div class="product">
                <img src="img/PILSEN.webp" alt="Six PILSEN">
                <div class="product-info">
                    <h3>Six PILSEN</h3>
                    <p>Lata de 473ml</p>
                    <span class="price-old">s/35.00</span>
                    <span class="price-new">s/35.00</span>
                    <button onclick="addToCart(4, 'Six PILSEN', 'Lata de 473ml', 35.00)">Agregar al carrito</button>
                </div>
            </div>
            <!-- Producto 4 -->
            
            <!-- Producto 5 -->
            <div class="product">
                <img src="img/CRISTAL.webp" alt="CRISTAL">
                <div class="product-info">
                    <h3>CRISTAL</h3>
                    <p>Lata de 473ml</p>
                    <span class="price-old">s/35.00</span>
                    <span class="price-new">s/35.00</span>
                    <button onclick="addToCart(26, 'CRISTAL', 'Lata de 473ml', 35.00)">Agregar al carrito</button>
                </div>
            </div>
            <!-- Producto 6 -->
            
            <!-- Producto 7 -->
            <div class="product">
                <img src="img/TRIGO.webp" alt="CUZQUEÑA">
                <div class="product-info">
                    <h3>CUZQUEÑA</h3>
                    <p>Lata de 473ml</p>
                    <span class="price-old">s/35.00</span>
                    <span class="price-new">s/35.00</span>
                    <button onclick="addToCart(27, 'CUZQUEÑA', 'Lata de 473ml', 35.00)">Agregar al carrito</button>
                </div>
            </div>
            <!-- Producto 8 -->
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
        </div>
    </section>

    <!-- Espacio para promociones -->
    <section id="espacio-promociones">
        <h2>¡No te pierdas nuestras promociones!</h2>
        <!-- Aquí puedes agregar contenido adicional para promociones -->
    </section>

    <!-- Carrito de Compras -->
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
                <p><strong>Email:</strong>licoreria.la.botella.borracha1@gmail.com</p>
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
</body>
</html>
