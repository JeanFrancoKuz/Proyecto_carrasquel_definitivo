<?
function removeFromCart($product)
{
    global $cart;

    // Filtrar los productos que no son el producto a eliminar
    $cart = array_filter($cart, function ($item) use ($product) {
        return $item['id'] !== $product['id'];
    });

    // Actualizar el carrito en el DOM
    updateCart();
}
