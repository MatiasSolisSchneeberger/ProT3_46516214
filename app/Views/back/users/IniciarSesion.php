<section class="container-sm py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h4 class="mb-0">Iniciar Sesión</h4>
                </div>
                <div class="card-body p-4">
                    <?php if(session()->getFlashdata('msg')): ?>
                        <div>
                            <?= session()->getFlashdata('msg') ?>
                        </div>
                    <?php endif ?>
                    <form class="form-control border-0" action="<?php echo base_url("/enviar_login") ?>">
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label fw-bold">Correo Electrónico</label>
                            <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ejemplo@correo.com">
                            <div id="emailHelp" class="form-text text-muted"></div>
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label fw-bold">Contraseña</label>
                            <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Ingrese su contraseña">
                        </div>
                        <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Recordar</label>
                        </div>
                        <div class="d-grid gap-2">
                            <input type="submit" value="Ingresar" class="btn btn-primary btn-lg" >
                            <a href="<?= base_url('/IniciarSesion') ?>" class="btn btn-secondary btn-lg">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>