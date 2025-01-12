<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>whisky</title>
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
            <div class="product">
                <img src="img/w=1500,h=1500,fit=pad VAT 69.avif" alt="VAT 69">
                <div class="product-info">
                    <h3>VAT 69</h3>
                    <p>Botella 750ml</p>
                    <span class="price-old">s/39.00</span>
                    <span class="price-new">s/35.00</span>
                    <button onclick="addToCart(9, 'VAT 69', 'Botella 750ml', 35.00)">Agregar al carrito</button>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="product">
                <img src="img/zihsl6u2mhlzqmy0iuwr PASSPORT.webp" alt="PASSPORT SCOTCH">
                <div class="product-info">
                    <h3>PASSPORT SCOTCH</h3>
                    <p>Botella 700ml</p>
                    <span class="price-old">s/35.00</span>
                    <span class="price-new">s/30.00</span>
                    <button onclick="addToCart(10, 'PASSPORT SCOTCH', 'Botella 700ml', 30.00)">Agregar al carrito</button>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="product">
                <img src="img/160490RED LABEL.webp" alt="RED LABEL">
                <div class="product-info">
                    <h3>RED LABEL</h3>
                    <p>Botella 750ml</p>
                    <span class="price-old">s/69.00</span>
                    <span class="price-new">s/60.00</span>
                    <button onclick="addToCart(11, 'RED LABEL', 'Botella 750ml', 60.00)">Agregar al carrito</button>
                </div>
            </div>
            <!-- Producto 4 -->
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
            <!-- Producto 5 -->
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
            <!-- Producto 6 -->
            
            <!-- Producto 7 -->
            
            <!-- Producto 8 -->
            
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
