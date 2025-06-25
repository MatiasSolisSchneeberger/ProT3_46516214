<?php
/**
 * Vista para mostrar todas las categorías de productos
 * Muestra una card por cada categoría con información relevante
 */
?>

<!-- Header de la página -->
<section class="container-fluid py-5 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold mb-3">Nuestros Productos</h1>
                <p class="lead mb-0">
                    Explora nuestra amplia gama de productos tecnológicos organizados por categorías
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Grid de categorías -->
<section class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    <?php foreach ($categorias as $categoria): ?>
                        <div class="col">
                            <div class="card h-100 border-0 shadow-lg hover-lift">
                                <!-- Imagen de la categoría -->
                                <div class="position-relative overflow-hidden" style="height: 200px;">
                                    <!-- Imagen de fondo con blur -->
                                    <div class="position-absolute w-100 h-100" 
                                         style="background: url('<?= base_url($categoria['imagen']) ?>') center center; background-size: cover; filter: blur(10px); opacity: 0.3; z-index: 1;"></div>
                                    
                                    <!-- Imagen principal centrada -->
                                    <div class="position-relative w-100 h-100 d-flex align-items-center justify-content-center" style="z-index: 2;">
                                        <img 
                                            src="<?= base_url($categoria['imagen']) ?>" 
                                            class="img-fluid" 
                                            alt="<?= $categoria['titulo'] ?>"
                                            style="max-height: 80%; max-width: 80%; object-fit: contain;">
                                    </div>
                                    
                                    <!-- Overlay con icono -->
                                    <div 
                                        class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" 
                                        style="background: rgba(0,0,0,0.3); z-index: 3;">
                                        <i class="<?= $categoria['icono'] ?> fa-4x text-white"></i>
                                    </div>
                                    
                                    <!-- Badge de cantidad de productos -->
                                    <div class="position-absolute top-0 end-0 m-3" style="z-index: 4;">
                                        <span class="badge bg-<?= $categoria['color'] ?> fs-6">
                                            <?= $categoria['cantidad_productos'] ?> productos
                                        </span>
                                    </div>
                                </div>
                                
                                <!-- Contenido de la card -->
                                <div class="card-body d-flex flex-column">
                                    <h4 class="card-title text-<?= $categoria['color'] ?> fw-bold mb-3">
                                        <?= $categoria['titulo'] ?>
                                    </h4>
                                    
                                    <p class="card-text text-muted flex-grow-1">
                                        <?= $categoria['descripcion'] ?>
                                    </p>
                                    
                                    <!-- Información adicional -->
                                    <div class="mt-3">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="text-muted">
                                                <i class="fas fa-tag me-1"></i>
                                                Desde <?= $categoria['precio_desde'] ?>
                                            </span>
                                            <span class="badge bg-light text-dark">
                                                <i class="fas fa-star text-warning me-1"></i>
                                                Popular
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Footer de la card -->
                                <div class="card-footer bg-transparent border-0 pb-3">
                                    <a 
                                        href="<?= base_url('categoria/' . $categoria['slug']) ?>" 
                                        class="btn btn-<?= $categoria['color'] ?> w-100 btn-lg">
                                        <i class="fas fa-arrow-right me-2"></i>
                                        Ver <?= $categoria['titulo'] ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de información adicional -->
<section class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="fw-bold text-primary">¿Por qué elegirnos?</h2>
                <p class="lead text-muted">Descubre las ventajas de comprar con nosotros</p>
            </div>
        </div>
        
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <div class="col text-center">
                <div class="p-4">
                    <i class="fas fa-shipping-fast fa-3x text-primary mb-3"></i>
                    <h5>Envío Gratis</h5>
                    <p class="text-muted">Envío gratuito en compras superiores a $50</p>
                </div>
            </div>
            
            <div class="col text-center">
                <div class="p-4">
                    <i class="fas fa-shield-alt fa-3x text-success mb-3"></i>
                    <h5>Garantía</h5>
                    <p class="text-muted">Garantía de 1 año en todos nuestros productos</p>
                </div>
            </div>
            
            <div class="col text-center">
                <div class="p-4">
                    <i class="fas fa-headset fa-3x text-info mb-3"></i>
                    <h5>Soporte 24/7</h5>
                    <p class="text-muted">Atención al cliente disponible las 24 horas</p>
                </div>
            </div>
            
            <div class="col text-center">
                <div class="p-4">
                    <i class="fas fa-undo fa-3x text-warning mb-3"></i>
                    <h5>Devolución Fácil</h5>
                    <p class="text-muted">30 días para devoluciones sin preguntas</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Estilos CSS adicionales -->
<style>
.hover-lift {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.hover-lift:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.1) !important;
}

/* Efectos para las imágenes principales */
.hover-lift:hover .img-fluid {
    transform: scale(1.05);
}

.img-fluid {
    transition: transform 0.3s ease;
}

/* Efectos para el fondo blur */
.hover-lift:hover .position-absolute[style*="filter: blur"] {
    filter: blur(15px) !important;
    opacity: 0.4 !important;
}

.position-absolute[style*="filter: blur"] {
    transition: filter 0.3s ease, opacity 0.3s ease;
}

/* Asegurar que las imágenes mantengan sus proporciones */
.img-fluid {
    object-fit: contain !important;
}

/* Efectos para todas las tarjetas */
.card {
    overflow: hidden;
}

.card:hover .img-fluid {
    transform: scale(1.05);
}

/* Responsive */
@media (max-width: 768px) {
    .hover-lift:hover {
        transform: translateY(-5px);
    }
    
    .hover-lift:hover .img-fluid {
        transform: scale(1.03);
    }
}

@media (max-width: 576px) {
    .hover-lift:hover {
        transform: none;
    }
    
    .hover-lift:hover .img-fluid {
        transform: scale(1.02);
    }
}
</style> 