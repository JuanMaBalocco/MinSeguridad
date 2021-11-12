<?php

include_once './admin/funciones/funciones.php';
include_once './config/config.php';
include_once('./template/header.php');

?>

<div class="container">
    <div class="d-flex align-items-center p-3 my-3 text-white rounded shadow-sm color-bluecat">
        <div class="col d-flex align-items-center">
            <img class="me-3" src="<?php echo img ?>princicon.png" alt="" width="48" height="48">
            <div class="lh-1">
                <h1 class="h5 mb-0 text-white lh-1 animate__animated animate__headShake">Ministerio de Seguridad</h1>
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
                        <a class="nav-link active color-backgray-anim" href="index.php">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-backgray-anim" href="404.php">CONSULTAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-backgray-anim" href="404.php">AGENTES</a>
                    </li>
                </ul>
                <br>

            </div>


        </div>


        <!-- BANNER Y NOTIFICACIONES -->
        <div class="row">

            <div class="col ">

                <div class="regimag">
            
                </div>

            </div>
            <div class="col-4">

                <div class="logimag">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                </div>

            </div>

        </div>
        <br>

        <!-- TARJETAS DE OPCIONES -->
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header color-bluecat-op text-white">
                            <h5 class="text-center align-center">Registro de Agentes</h5>
                        </div>
                        <img src="assets/img/info1.jpg" alt="" class="card-img">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum optio commodi quas impedit vitae eaque reprehenderit eius ut et.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header color-bluecat-op text-white">
                            <h5 class="text-center align-center">Comisarias 2.0</h5>
                        </div>
                        <img src="assets/img/info2.jpg" alt="" class="card-img">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum optio commodi quas impedit vitae eaque reprehenderit eius ut et.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header color-bluecat-op text-white">
                            <h5 class="text-center align-center">Controles Vehiculares</h5>
                        </div>
                        <img src="assets/img/info3.jpg" alt="" class="card-img">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum optio commodi quas impedit vitae eaque reprehenderit eius ut et.</p>
                        
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</div>
<?php
include_once('./template/footer.php');
?>