/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */
let carrito = [];
let total = 0;
function agregarAlCarrito(button) {
    const product = button.parentNode;
    const title = product.querySelector('h2').textContent;
    let originalPrice;
    let discountedPrice;

    if (product.querySelector('.precio-orig')) {
        originalPrice = product.querySelector('.precio-orig').textContent;
        discountedPrice = product.querySelector('.desc-precio').textContent;
    } else {
        originalPrice = product.querySelector('p').textContent;
        discountedPrice = originalPrice;
    }

    carrito.push({title, originalPrice, discountedPrice});
    total += parseFloat(discountedPrice.replace('S/', '').replace(',', ''));

    actualizarCarrito();
}

function actualizarCarrito() {
    const carritoCount = document.getElementById('carrito-count');
    carritoCount.innerHTML = `<i class="fas fa-shopping-cart"></i> ${carrito.length}`;
}

function mostrarCarrito() {
    const carritoDiv = document.getElementById('carrito');
    const carritoItems = document.getElementById('carrito-items');
    carritoItems.innerHTML = '';

    carrito.forEach(item => {
        const itemDiv = document.createElement('div');
        itemDiv.textContent = `${item.title} - ${item.discountedPrice}`;
        carritoItems.appendChild(itemDiv);
    });

    carritoDiv.style.display = 'block';
}

function ocultarCarrito() {
    const carritoDiv = document.getElementById('carrito');
    carritoDiv.style.display = 'none';
}

function realizarCompra() {
    // Redirige al cliente a una página para ingresar sus datos de compra.
    window.location.href = 'Datos_Compra.php';
}


