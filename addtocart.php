<?

function addToCart($product)
{
    global $cart;

    // Verificar si el producto ya existe en el carrito
    $existingProduct = null;
    foreach ($cart as $item) {
        if ($item['id'] === $product['id']) {
            $existingProduct = $item;
            break;
        }
    }

    if ($existingProduct) {
        // Si el producto ya existe, incrementar la cantidad
        $existingProduct['quantity'] += 1;
    } else {
        // Si el producto no existe, agregarlo al carrito con una cantidad de 1
        $cart[] = array_merge($product, array('quantity' => 1));
    }
    // Actualizar el carrito en el DOM
    updateCart();
}
