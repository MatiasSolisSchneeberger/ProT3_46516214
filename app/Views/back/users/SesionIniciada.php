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

    <!-- Mensajes de éxito/error -->
    <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle me-2"></i>
            <?= session()->getFlashdata('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fas fa-exclamation-circle me-2"></i>
            <?= session()->getFlashdata('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

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
                        <form action="<?= base_url('/agregar-producto') ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="titulo" class="form-label fw-bold">Título del Producto</label>
                                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="descripcion" class="form-label fw-bold">Descripción</label>
                                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="precio" class="form-label fw-bold">Precio</label>
                                        <div class="input-group">
                                            <span class="input-group-text">$</span>
                                            <input type="number" class="form-control" id="precio" name="precio" step="0.01" min="0" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="categoria" class="form-label fw-bold">Categoría</label>
                                        <select class="form-select" id="categoria" name="categoria" required>
                                            <option value="">Seleccione una categoría</option>
                                            <option value="smartphones">Smartphones</option>
                                            <option value="laptops">Laptops</option>
                                            <option value="tablets">Tablets</option>
                                            <option value="accesorios">Accesorios</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="imagen" class="form-label fw-bold">Imagen del Producto</label>
                                        <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required>
                                        <div class="form-text">Formatos permitidos: JPG, PNG, GIF. Tamaño máximo: 5MB</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="stock" class="form-label fw-bold">Stock Disponible</label>
                                        <input type="number" class="form-control" id="stock" name="stock" min="0" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="marca" class="form-label fw-bold">Marca</label>
                                        <input type="text" class="form-control" id="marca" name="marca" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="modelo" class="form-label fw-bold">Modelo</label>
                                        <input type="text" class="form-control" id="modelo" name="modelo" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success btn-lg">
                                        <i class="fas fa-plus"></i> Agregar Producto
                                    </button>
                                    <button type="reset" class="btn btn-secondary btn-lg ms-2">
                                        <i class="fas fa-undo"></i> Limpiar Formulario
                                    </button>
                                </div>
                            </div>
                        </form>
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
                        <div class="text-center py-5">
                            <i class="fas fa-shopping-cart fa-5x text-muted mb-3"></i>
                            <h4 class="text-muted">Tu carrito está vacío</h4>
                            <p class="text-muted">¡Agrega algunos productos para comenzar a comprar!</p>
                            <a href="<?= base_url('/productos') ?>" class="btn btn-primary btn-lg">
                                <i class="fas fa-shopping-bag"></i> Ver Productos
                            </a>
                        </div>
                        
                        <!-- Sección de productos recientes -->
                        <div class="mt-4">
                            <h5>Productos Recientes</h5>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <div class="card h-100">
                                        <img src="<?= base_url('assets/images/iPhone16Pro/display__f5509jfp9nyq_xlarge.jpg') ?>" class="card-img-top" alt="iPhone 16 Pro">
                                        <div class="card-body">
                                            <h6 class="card-title">iPhone 16 Pro</h6>
                                            <p class="card-text text-success fw-bold">$999.99</p>
                                            <form action="<?= base_url('/agregar-al-carrito') ?>" method="post" class="d-inline">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="producto_id" value="1">
                                                <button type="submit" class="btn btn-outline-primary btn-sm">
                                                    <i class="fas fa-cart-plus"></i> Agregar al Carrito
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="card h-100">
                                        <img src="<?= base_url('assets/images/iPhone16Pro/color__eaawe4bmivki_xlarge.jpg') ?>" class="card-img-top" alt="iPhone 16 Pro Max">
                                        <div class="card-body">
                                            <h6 class="card-title">iPhone 16 Pro Max</h6>
                                            <p class="card-text text-success fw-bold">$1,199.99</p>
                                            <form action="<?= base_url('/agregar-al-carrito') ?>" method="post" class="d-inline">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="producto_id" value="2">
                                                <button type="submit" class="btn btn-outline-primary btn-sm">
                                                    <i class="fas fa-cart-plus"></i> Agregar al Carrito
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="card h-100">
                                        <img src="<?= base_url('assets/images/iPhone16Pro/apple_intelligence_endframe__ksa4clua0duu_xlarge.jpg') ?>" class="card-img-top" alt="MacBook Pro">
                                        <div class="card-body">
                                            <h6 class="card-title">MacBook Pro</h6>
                                            <p class="card-text text-success fw-bold">$1,499.99</p>
                                            <form action="<?= base_url('/agregar-al-carrito') ?>" method="post" class="d-inline">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="producto_id" value="3">
                                                <button type="submit" class="btn btn-outline-primary btn-sm">
                                                    <i class="fas fa-cart-plus"></i> Agregar al Carrito
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="card h-100">
                                        <img src="<?= base_url('assets/images/iPhone16Pro/display__f5509jfp9nyq_xlarge.jpg') ?>" class="card-img-top" alt="iPad Pro">
                                        <div class="card-body">
                                            <h6 class="card-title">iPad Pro</h6>
                                            <p class="card-text text-success fw-bold">$799.99</p>
                                            <form action="<?= base_url('/agregar-al-carrito') ?>" method="post" class="d-inline">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="producto_id" value="4">
                                                <button type="submit" class="btn btn-outline-primary btn-sm">
                                                    <i class="fas fa-cart-plus"></i> Agregar al Carrito
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>