<?php $session = session(); $nombre = $session->get('name'); $profile_id = $session->get('profile_id'); ?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url('/'); ?>">
            <img class="logo" src="<?php echo base_url('assets/images/Logo.png') ?>" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo base_url('/'); ?>">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('/productos'); ?>">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('/sobre-nosotros'); ?>">Sobre nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('/acerca-de'); ?>">Acerca de</a>
                </li>
                <?php if (!$session->get('isLoggedIn')): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/registrarse'); ?>">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/IniciarSesion'); ?>">Iniciar Sesión</a>
                    </li>
                <?php endif; ?>
            </ul>
            
            <?php if ($session->get('isLoggedIn')): ?>
                <!-- Usuario logueado -->
                <div class="d-flex align-items-center">
                    <form class="d-flex me-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    
                    <!-- Dropdown del usuario -->
                    <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle d-flex align-items-center text-decoration-none" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="position-relative me-2">
                                <img src="<?php echo base_url('assets/images/personal/persona1.jpg'); ?>" 
                                        class="rounded-circle" 
                                        width="40" 
                                        height="40" 
                                        alt="Foto de perfil"
                                        style="object-fit: cover; <?php echo ($profile_id == 1) ? 'border: 3px solid #0d6efd;' : ''; ?>">
                            </div>
                            <span class="text"><?php echo $nombre; ?></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="userDropdown">
                            <li>
                                <div class="dropdown-item-text">
                                    <div class="fw-bold"><?php echo $nombre . ' ' . $session->get('last_name'); ?></div>
                                    <small class="text-muted"><?php echo $session->get('email'); ?></small>
                                </div>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="<?php echo base_url('/MiPerfil'); ?>">
                                    <i class="fas fa-user me-2"></i>Mi Perfil
                                </a>
                            </li>
                            <?php if ($profile_id == 1): ?>
                                <li>
                                    <a class="dropdown-item" href="<?php echo base_url('/panel-admin'); ?>">
                                        <i class="fas fa-cog me-2"></i>Panel de Administración
                                    </a>
                                </li>
                            <?php endif; ?>
                            <li>
                                <a class="dropdown-item" href="<?php echo base_url('/carrito'); ?>">
                                    <i class="fas fa-shopping-cart me-2"></i>Mi Carrito
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item text-danger" href="<?php echo base_url('/logout'); ?>">
                                    <i class="fas fa-sign-out-alt me-2"></i>Cerrar Sesión
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            <?php else: ?>
                <!-- Usuario no logueado -->
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            <?php endif; ?>
            
            <!-- Theme toggle button -->
            <div class="dropdown bd-mode-toggle ms-2">
                <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
                    <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                                <use href="#sun-fill"></use>
                            </svg>
                            Light
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                                <use href="#moon-fill"></use>
                            </svg>
                            Dark
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                                <use href="#circle-half"></use>
                            </svg>
                            Auto
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- SVG Icons for theme toggle -->
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.414a.5.5 0 1 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
    </symbol>
    <symbol id="moon-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
    </symbol>
</svg>