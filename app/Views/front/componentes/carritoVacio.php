<?php
/**
 * Componente para mostrar el carrito vacío
 * Uso: <?= view('front/componentes/carritoVacio') ?>
 */
?>

<div class="text-center py-5">
    <i class="fas fa-shopping-cart fa-5x text-muted mb-3"></i>
    <h4 class="text-muted">Tu carrito está vacío</h4>
    <p class="text-muted">¡Agrega algunos productos para comenzar a comprar!</p>
    <a href="<?= base_url('/productos') ?>" class="btn btn-primary btn-lg">
        <i class="fas fa-shopping-bag"></i> Ver Productos
    </a>
</div> 