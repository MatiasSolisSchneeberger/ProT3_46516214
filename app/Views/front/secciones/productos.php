<?php
/**
 * Sección de productos con parámetros dinámicos
 * Uso: <?= view('front/secciones/productos', ['productos' => $productos, 'titulo_categoria' => 'Smartphones']) ?>
 * 
 * @param array $productos Array de productos con sus datos
 * @param string $titulo_categoria Título de la categoría
 */
$productos = $productos ?? [];
$titulo_categoria = $titulo_categoria ?? 'Productos';
$url_ver_mas = $url_ver_mas ?? base_url('productos');
?>

<!-- Productos Seccion -->
<section class="productos-seccion">
    <header class="productos-header">
        <h2>
            <?= $titulo_categoria ?>:
        </h2>
        <a href="<?= $url_ver_mas ?>">
            <button type="button" class="btn btn-outline-primary">
                Ver Mas →
            </button>
        </a>
    </header>
    <article class="productos-cards">
        <?php if (!empty($productos)): ?>
            <?php foreach ($productos as $producto): ?>
                <?= view('front/componentes/productoTarjeta', ['producto' => $producto]) ?>
            <?php endforeach; ?>
        <?php else: ?>
            <!-- Productos por defecto si no se pasan parámetros -->
            <?php for ($i = 0; $i < 8; $i++): ?>
                <?= view('front/componentes/productoTarjeta') ?>
            <?php endfor; ?>
        <?php endif; ?>
    </article>
</section>