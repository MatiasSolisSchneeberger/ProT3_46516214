<section class="container-sm py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h4 class="mb-0">Crear una cuenta</h4>
                </div>
                <div class="card-body p-4">
                    <form class="form-control border-0">
                        <div class="mb-4">
                            <label for="nombre" class="form-label fw-bold">Nombre completo</label>
                            <input type="text" class="form-control form-control-lg" id="nombre" required placeholder="Ingrese su nombre completo">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label fw-bold">Correo electrónico</label>
                            <input type="email" class="form-control form-control-lg" id="email" aria-describedby="emailHelp" required placeholder="ejemplo@correo.com">
                            <div id="emailHelp" class="form-text text-muted">Nunca compartiremos tu correo con nadie más.</div>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label fw-bold">Contraseña</label>
                            <input type="password" class="form-control form-control-lg" id="password" required placeholder="Ingrese su contraseña">
                        </div>
                        <div class="mb-4">
                            <label for="confirmPassword" class="form-label fw-bold">Confirmar contraseña</label>
                            <input type="password" class="form-control form-control-lg" id="confirmPassword" required placeholder="Confirme su contraseña">
                        </div>
                        <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input" id="terminos" required>
                            <label class="form-check-label" for="terminos">Acepto los términos y condiciones</label>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">Registrarse</button>
                            <a href="<?= base_url('/') ?>" class="btn btn-secondary btn-lg">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>