<section class="container-sm py-5">
    <div class="row justify-content-center">
        <div class="col-md-10 max-width-500">
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h4 class="mb-0">Crear una cuenta</h4>
                </div>
                <div class="card-body p-4">
                    <form class="form-control border-0" action="<?= base_url('/enviar-form') ?>" method="post">
                        <?php $validation = \Config\Services::validation(); ?>
                        <?= csrf_field(); ?>
                        
                        <!-- mensaje de error -->
                        <?php if (!empty(session()->getFlashdata('fail'))): ?>
                            <div class="alert alert-danger">
                                <?= session()->getFlashdata('fail'); ?>
                            </div>
                        <?php endif; ?>

                        <!-- mensaje de exito -->
                        <?php if (!empty(session()->getFlashdata('success'))): ?>
                            <div class="alert alert-success">
                                <?= session()->getFlashdata('success'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="mb-4">
                            <label for="nombre" class="form-label fw-bold">
                                Nombre completo
                            </label>
                            <input type="text" class="form-control form-control-lg" id="nombre" name="name" required placeholder="Ingrese su nombre completo">
                            <?php if($validation->getError('name')) {?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error =$validation->getError('name'); ?>
                                </div>
                            <?php }?>
                        </div>
                        <div class="mb-4">
                            <label for="apellido" class="form-label fw-bold" placeholder="Ingrese su apellido completo">
                                Apellido completo
                            </label>
                            <input type="text" class="form-control form-control-lg" id="apellido" name="last_name" required placeholder="Ingrese su apellido completo">
                            <?php if($validation->getError('last_name')) {?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error =$validation->getError('last_name'); ?>
                                </div>
                            <?php }?>
                        </div>
                        <div class="mb-4">
                            <label for="nickname" class="form-label fw-bold" placeholder="Ingrese su nombre de usuario">
                                Nombre de usuario
                            </label>
                            <input type="text" class="form-control form-control-lg" id="nickname" name="nickname" required placeholder="Ingrese su nombre de usuario">
                            <?php if($validation->getError('nickname')) {?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error =$validation->getError('nickname'); ?>
                                </div>
                            <?php }?>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label fw-bold" placeholder="ejemplo@correo.com">
                                Correo electrónico
                            </label>
                            <input type="email" class="form-control form-control-lg" id="email" name="email"
                                aria-describedby="emailHelp" required placeholder="ejemplo@correo.com">
                                <?php if($validation->getError('email')) {?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error =$validation->getError('email'); ?>
                                </div>
                            <?php }?>
                            <span id="emailHelp" class="form-text text-muted">
                                Nunca compartiremos tu correo con nadie más.
                            </span>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label fw-bold"
                                placeholder="Ingrese su contraseña">
                                Contraseña
                            </label>
                            <?php if($validation->getError('password')) {?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error =$validation->getError('password'); ?>
                                </div>
                            <?php }?>
                            <input type="password" class="form-control form-control-lg" id="password" name="password" required
                                placeholder="Ingrese su contraseña">
                        </div>
                        <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input" id="terminos" required>
                            <label class="form-check-label" for="terminos">
                                Acepto los términos y condiciones
                            </label>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">
                                Registrarse
                            </button>
                            <a href="<?= base_url('/') ?>" class="btn btn-secondary btn-lg">
                                Cancelar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>