<section class="container-fluid py-4">
    <header class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h1 class="mb-0">Panel de Usuario</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Bienvenido:</strong> <?= session()->get('name') ?> <?= session()->get('last_name') ?></p>
                            <p><strong>Correo:</strong> <?= session()->get('email') ?></p>
                            <p><strong>Nickname:</strong> <?= session()->get('nickname') ?></p>
                        </div>
                        <div class="col-md-6 text-end">
                            <p><strong>Rol:</strong> 
                                <?php if(session()->get('profile_id') == 1): ?>
                                    <span class="badge bg-danger">Administrador</span>
                                <?php else: ?>
                                    <span class="badge bg-info">Usuario</span>
                                <?php endif; ?>
                            </p>
                            <a href="<?= base_url('/logout') ?>" class="btn btn-danger">Cerrar sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Componente de alertas -->
    <?= view('front/componentes/alertas') ?>

    <div class="row">
        <?php if(session()->get('profile_id') == 1): ?>
            <!-- Panel de Administrador -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h3 class="mb-0">
                            <i class="fas fa-crown me-2"></i>
                            Panel de Administrador - Agregar Nuevo Producto
                        </h3>
                    </div>
                    <div class="card-body">
                        <?= view('front/componentes/formularioProducto') ?>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <!-- Panel de Usuario -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h3 class="mb-0">
                            <i class="fas fa-shopping-cart me-2"></i>
                            Mi Carrito de Compras
                        </h3>
                    </div>
                    <div class="card-body">
                        <?= view('front/componentes/carritoVacio') ?>
                        
                        <!-- Sección de productos recientes -->
                        <div class="mt-4">
                            <h5>Productos Recientes</h5>
                            <div class="row">
                                <?php
                                $productos = [
                                    [
                                        'id' => 1,
                                        'titulo' => 'iPhone 16 Pro',
                                        'precio' => '999.99',
                                        'imagen' => 'assets/images/iPhone16Pro/display__f5509jfp9nyq_xlarge.jpg',
                                        'alt' => 'iPhone 16 Pro',
                                        'descripcion' => 'El iPhone 16 Pro con las últimas tecnologías de Apple.'
                                    ],
                                    [
                                        'id' => 2,
                                        'titulo' => 'iPhone 16 Pro Max',
                                        'precio' => '1,199.99',
                                        'imagen' => 'assets/images/iPhone16Pro/color__eaawe4bmivki_xlarge.jpg',
                                        'alt' => 'iPhone 16 Pro Max',
                                        'descripcion' => 'La versión más grande y potente del iPhone 16 Pro.'
                                    ],
                                    [
                                        'id' => 3,
                                        'titulo' => 'MacBook Pro',
                                        'precio' => '1,499.99',
                                        'imagen' => 'assets/images/iPhone16Pro/apple_intelligence_endframe__ksa4clua0duu_xlarge.jpg',
                                        'alt' => 'MacBook Pro',
                                        'descripcion' => 'Potencia profesional para tus proyectos más exigentes.'
                                    ],
                                    [
                                        'id' => 4,
                                        'titulo' => 'iPad Pro',
                                        'precio' => '799.99',
                                        'imagen' => 'assets/images/iPhone16Pro/display__f5509jfp9nyq_xlarge.jpg',
                                        'alt' => 'iPad Pro',
                                        'descripcion' => 'La tablet más avanzada para creativos y profesionales.'
                                    ]
                                ];
                                
                                foreach ($productos as $producto) {
                                    echo view('front/componentes/productoTarjeta', ['producto' => $producto]);
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>