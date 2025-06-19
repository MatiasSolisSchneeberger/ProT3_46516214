<!-- Productos Seccion -->
<section class="productos-seccion">
    <header class="productos-header">
        <h2>
            Productos:
        </h2>
        <a href="<?= base_url('productos') ?>">
            <button type="button" class="btn btn-outline-primary">
                Ver Mas →
            </button>
        </a>
    </header>
    <article class="productos-cards">
        <?php echo view('/front/componentes/productoTarjeta.php'); ?>
        <?php echo view('/front/componentes/productoTarjeta.php'); ?>
        <?php echo view('/front/componentes/productoTarjeta.php'); ?>
        <?php echo view('/front/componentes/productoTarjeta.php'); ?>
        <?php echo view('/front/componentes/productoTarjeta.php'); ?>
        <?php echo view('/front/componentes/productoTarjeta.php'); ?>
        <?php echo view('/front/componentes/productoTarjeta.php'); ?>
        <?php echo view('/front/componentes/productoTarjeta.php'); ?>
    </article>
</section>