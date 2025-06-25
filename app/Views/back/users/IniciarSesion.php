<section class="container-sm py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h4 class="mb-0">Iniciar Sesión</h4>
                </div>
                <div class="card-body p-4">
                    <!-- mensaje de error -->
                    <?php if(session()->getFlashdata('msg')): ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('msg') ?>
                        </div>
                    <?php endif ?>
                    <!-- formulario de inicio de sesión -->
                    <form class="form-control border-0" action="<?php echo base_url("/enviar-login") ?>" method="post">
                        <?= csrf_field(); ?>
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label fw-bold">Correo Electrónico</label>
                            <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="ejemplo@correo.com" required>
                            <div id="emailHelp" class="form-text text-muted"></div>
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label fw-bold">Contraseña</label>
                            <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password" placeholder="Ingrese su contraseña" required>
                        </div>
                        <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Recordar</label>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">
                                Iniciar Sesión
                            </button>
                            <a href="<?= base_url('/registrarse') ?>" class="btn btn-secondary btn-lg">
                                Registrarse
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>