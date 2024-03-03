<?php
function updateCart()
{
  // Obtener el elemento del DOM que contiene el carrito
  $cartDOM = '<div class="cart">';

  // Agregar cada producto del carrito al DOM
  global $cart;
  foreach ($cart as $item) {
    $cartDOM .= '<div class="cart-product">';

    // ... (Aquí puede agregar el resto del código para mostrar el producto en el DOM)

    // Agregar el botón de eliminar al carrito
    $cartDOM .= '<button class="icon-close" onclick="removeFromCart(' . json_encode($item) . ')"><i class="fas fa-times"></i></button>';

    $cartDOM .= '</div>';
  }

  // Cerrar el elemento del DOM que contiene el carrito
  $cartDOM .= '</div>';


  echo $cartDOM;


  updateCartTotal();
}
