// Función para mostrar y ocultar el carrito de compras
function toggleCart() {
    const cart = document.getElementById('cart');
    cart.style.display = (cart.style.display === 'block') ? 'none' : 'block';
}

// Función para agregar productos al carrito
function addToCart(id, name, description, price) {
    const cartItems = getCartItems();
    
    // Verificar si el producto ya está en el carrito
    let item = cartItems.find(item => item.id === id);
    if (item) {
        // Si el producto ya está en el carrito, solo aumentar la cantidad
        item.quantity += 1;
    } else {
        // Si el producto no está en el carrito, agregarlo
        item = { id, name, description, price, quantity: 1 };
        cartItems.push(item);
    }

    // Guardar los productos en localStorage
    setCartItems(cartItems);
    // Actualizar la visualización del carrito
    renderCartItems();
    // Actualizar el total
    updateTotalPrice();
}

// Función para cambiar la cantidad de un producto
function changeQuantity(button, delta, id) {
    const cartItems = getCartItems();
    const item = cartItems.find(item => item.id === id);

    if (item) {
        item.quantity = Math.max(item.quantity + delta, 1);
        setCartItems(cartItems);
        renderCartItems();
        updateTotalPrice();
    }
}

// Función para eliminar productos del carrito
function removeFromCart(button, id) {
    let cartItems = getCartItems();
    cartItems = cartItems.filter(item => item.id !== id);
    setCartItems(cartItems);
    renderCartItems();
    updateTotalPrice();
}

// Función para actualizar el total del carrito
function updateTotalPrice() {
    const cartItems = getCartItems();
    const totalPrice = cartItems.reduce((total, item) => total + item.price * item.quantity, 0);
    const totalPriceElem = document.getElementById('total-price');
    totalPriceElem.textContent = `$${totalPrice.toFixed(2)}`;
}

// Función para obtener los productos del carrito desde localStorage
function getCartItems() {
    return JSON.parse(localStorage.getItem('cartItems')) || [];
}

// Función para guardar los productos del carrito en localStorage
function setCartItems(cartItems) {
    localStorage.setItem('cartItems', JSON.stringify(cartItems));
}

// Función para renderizar los productos del carrito
function renderCartItems() {
    const cartItems = getCartItems();
    const cartItemsElem = document.getElementById('cart-items');
    cartItemsElem.innerHTML = ''; // Limpiar el contenido actual

    cartItems.forEach(item => {
        const itemElem = document.createElement('li');
        itemElem.id = `item-${item.id}`;
        itemElem.classList.add('cart-item');
        itemElem.innerHTML = `
            <button class="remove-btn" onclick="removeFromCart(this, ${item.id})">&times;</button>
            <div class="cart-item-details">
                <span>${item.name}</span>
                <p>${item.description}</p>
                <span>$${item.price.toFixed(2)}</span>
                <div class="quantity-controls">
                    <button onclick="changeQuantity(this, -1, ${item.id})">&#9664;</button>
                    <input type="number" value="${item.quantity}" min="1" onchange="updateQuantity(this, ${item.id})">
                    <button onclick="changeQuantity(this, 1, ${item.id})">&#9654;</button>
                </div>
            </div>
        `;
        cartItemsElem.appendChild(itemElem);
    });
}

// Función para actualizar la cantidad de un producto
function updateQuantity(input, id) {
    const cartItems = getCartItems();
    const item = cartItems.find(item => item.id === id);

    if (item) {
        item.quantity = parseInt(input.value, 10);
        setCartItems(cartItems);
        updateTotalPrice();
    }
}

// Función para realizar el checkout
function checkout() {
    alert('Proceso de compra en desarrollo.');
}

// Llamar a renderCartItems y updateTotalPrice al cargar la página
document.addEventListener('DOMContentLoaded', function() {
    renderCartItems();
    updateTotalPrice();
});

// JavaScript para el carrusel
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelector('.carousel-slide');
    const images = document.querySelectorAll('.carousel-slide img');
    let index = 0;

    function showSlide(index) {
        const offset = -index * 100;
        slides.style.transform = `translateX(${offset}%)`;
    }

    function nextSlide() {
        index = (index + 1) % images.length;
        showSlide(index);
    }

    function prevSlide() {
        index = (index - 1 + images.length) % images.length;
        showSlide(index);
    }

    setInterval(nextSlide, 20000); // Cambia cada 20 segundos

    // Opcional: Añadir botones de navegación (izquierda/derecha)
    document.querySelector('.carousel-prev').addEventListener('click', prevSlide);
    document.querySelector('.carousel-next').addEventListener('click', nextSlide);
});




function checkout() {
    const cartItems = getCartItems();
    const totalPrice = cartItems.reduce((total, item) => total + item.price * item.quantity, 0).toFixed(2);
    let message = '¡Hola! Me gustaría comprar los siguientes productos:\n\n';
    
    cartItems.forEach(item => {
        message += `* ${item.name} (${item.description}): $${item.price.toFixed(2)} x ${item.quantity}\n`;
    });
    
    message += `\nTotal: $${totalPrice}`;
    
    const whatsappLink = `https://wa.me/51926727267?text=${encodeURIComponent(message)}`;
    window.open(whatsappLink, '_blank');
}

// Llamar a renderCartItems y updateTotalPrice al cargar la página
document.addEventListener('DOMContentLoaded', function() {
    renderCartItems();
    updateTotalPrice();
});








 