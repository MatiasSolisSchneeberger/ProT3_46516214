<?php
/**
 * Vista para páginas de categoría
 * Muestra el título de la categoría y todos los productos
 */
?>

<!-- Header de la categoría -->
<section class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $titulo_categoria ?></li>
                    </ol>
                </nav>
                
                <div class="text-center mb-5">
                    <h1 class="display-4 fw-bold text-primary mb-3">
                        <?= $titulo_categoria ?>
                    </h1>
                    <p class="lead text-muted">
                        Descubre nuestra colección completa de <?= strtolower($titulo_categoria) ?>
                    </p>
                    <div class="d-flex justify-content-center align-items-center gap-3">
                        <span class="badge bg-primary fs-6">
                            <?= count($productos) ?> productos disponibles
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Grid de productos -->
<section class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Filtros y ordenamiento (opcional) -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h5 class="mb-0">Mostrando todos los productos</h5>
                    </div>
                    <div class="d-flex gap-2">
                        <select class="form-select form-select-sm" style="width: auto;">
                            <option>Ordenar por</option>
                            <option>Precio: Menor a Mayor</option>
                            <option>Precio: Mayor a Menor</option>
                            <option>Nombre: A-Z</option>
                            <option>Nombre: Z-A</option>
                        </select>
                    </div>
                </div>
                
                <!-- Grid de productos -->
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
                    <?php foreach ($productos as $producto): ?>
                        <div class="col">
                            <?= view('front/componentes/productoTarjeta', ['producto' => $producto]) ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                
                <!-- Paginación (opcional) -->
                <div class="d-flex justify-content-center mt-5">
                    <nav aria-label="Navegación de productos">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Siguiente</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de categorías relacionadas -->
<section class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center mb-4">Explora otras categorías</h3>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    <?php
                    $categorias = [
                        'smartphones' => ['titulo' => 'Smartphones', 'icono' => 'fas fa-mobile-alt', 'color' => 'primary'],
                        'laptops' => ['titulo' => 'Laptops', 'icono' => 'fas fa-laptop', 'color' => 'success'],
                        'tablets' => ['titulo' => 'Tablets', 'icono' => 'fas fa-tablet-alt', 'color' => 'info'],
                        'accesorios' => ['titulo' => 'Accesorios', 'icono' => 'fas fa-headphones', 'color' => 'warning']
                    ];
                    
                    foreach ($categorias as $cat_slug => $cat_info):
                        if ($cat_slug !== $categoria):
                    ?>
                        <div class="col">
                            <a href="<?= base_url('categoria/' . $cat_slug) ?>" class="text-decoration-none">
                                <div class="card h-100 text-center border-0 shadow-sm">
                                    <div class="card-body">
                                        <i class="<?= $cat_info['icono'] ?> fa-3x text-<?= $cat_info['color'] ?> mb-3"></i>
                                        <h5 class="card-title"><?= $cat_info['titulo'] ?></h5>
                                        <p class="card-text text-muted">Descubre nuestra colección</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php 
                        endif;
                    endforeach; 
                    ?>
                </div>
            </div>
        </div>
    </div>
</section> 