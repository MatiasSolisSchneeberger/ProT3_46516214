<?php
/**
 * Componente para mostrar una tarjeta de producto
 * Uso: <?= view('front/componentes/productoTarjeta', ['producto' => $producto]) ?>
 * 
 * @param array $producto Array con: id, titulo, precio, imagen, alt, descripcion (opcional), mostrar_carrito (opcional)
 */
$producto = $producto ?? [];
$id = $producto['id'] ?? '';
$titulo = $producto['titulo'] ?? 'Producto';
$precio = $producto['precio'] ?? '';
$imagen = $producto['imagen'] ?? 'assets/images/iPhone16Pro/iPhone16ProMax.png';
$alt = $producto['alt'] ?? $titulo;
$descripcion = $producto['descripcion'] ?? 'Some quick example text to build on the card title and make up the bulk of the card\'s content.';
$mostrar_carrito = $producto['mostrar_carrito'] ?? true;
$url_detalles = base_url('productos/iphone');

// Verificar si el usuario está logueado
$usuario_logueado = session()->get('isLoggedIn') ? true : false;
?>

<div class="card h-100">
    <div class="overflow-hidden position-relative" style="height: 200px;">
        <!-- Imagen de fondo con blur -->
        <div
            class="position-absolute w-100 h-100" 
            style="background: url('<?= base_url($imagen) ?>')
            center center; 
            background-size: cover;
            filter: blur(10px);
            opacity: 0.3;
            z-index: 1;">
        </div>
        
        <!-- Imagen principal centrada -->
        <div class="position-relative w-100 h-100 d-flex align-items-center justify-content-center" style="z-index: 2;">
            <img 
                src="<?= base_url($imagen) ?>" 
                class="img-fluid" 
                alt="<?= $alt ?>"
                style="max-height: 80%; max-width: 80%; object-fit: contain;">
        </div>
    </div>
    <div class="card-body">
        <h6 class="card-title"><?= $titulo ?></h6>
        <?php if ($precio): ?>
            <p class="card-text text-success fw-bold">$<?= $precio ?></p>
        <?php endif; ?>
        <p class="card-text"><?= $descripcion ?></p>
        
        <div class="d-flex gap-2">
            <a href="<?= $url_detalles ?>" class="btn btn-primary">
                <i class="fas fa-eye"></i> Ver Detalles
            </a>
            
            <?php if ($mostrar_carrito && $id && $usuario_logueado): ?>
                <form action="<?= base_url('/agregar-al-carrito') ?>" method="post" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="producto_id" value="<?= $id ?>">
                    <button type="submit" class="btn btn-outline-primary">
                        <i class="fas fa-cart-plus"></i> Agregar al Carrito
                    </button>
                </form>
            <?php elseif ($mostrar_carrito && $id && !$usuario_logueado): ?>
                <a href="<?= base_url('/IniciarSesion') ?>" class="btn btn-outline-secondary">
                    <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>