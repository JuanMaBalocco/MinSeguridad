<?php   include_once './admin/funciones/funciones.php';
include_once './config/config.php';
include_once('./template/header.php'); 
?>

<div class="container">

    <div class="d-flex align-items-center p-3 my-3 text-white rounded shadow-sm color-bluecat">

        <div class="col d-flex align-items-center">

            <img class="me-3" src="<?php echo img ?>princicon.png" alt="" width="48" height="48">
            <div class="lh-1">
                <h1 class="h5 mb-0 text-white lh-1 animate__animated animate__headShake">Ministerios y Tramites</h1>
                <h6 class="animate__animated animate__headShake">Gobierno de Catamarca</h6>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="my-3 p-5 bg-body rounded-3 shadow-sm">

        <!-- MENU PRINCIPAL -->
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active color-backgray-anim" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-backgray-anim color-backgray-anim" href="index_seguridad.php">Ministerio de Seguridad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-backgray-anim" href="404.php">Tramites</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-backgray-anim" href="404.php">Cuenta</a>
                    </li>
                </ul>
                <br>
            </div>
        </div>
    </div>
</div>

<?php
include_once('./template/footer.php');  
?>