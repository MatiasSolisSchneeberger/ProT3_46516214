<?php
/**
 * Componente para el formulario de agregar producto
 * Uso: <?= view('front/componentes/formularioProducto') ?>
 */
?>

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