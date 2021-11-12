<?php   include_once 'funciones/funciones.php';
include_once './config/config.php';
include_once('registroCivil/template/header.php'); 

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
                        <a class="nav-link active" href="registrocivil_inicio.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-backgray-anim" href="personas_index.php">Personas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-backgray-anim" href="#">Tramites</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-backgray-anim" href="#">Cuenta</a>
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

                <div class="card">

                    <h5 class="card-header bg-danger text-white "><i class="fas fa-exclamation-circle"></i> Atencion</h5>
                    <div class="card-body">
                        <h5 class="card-title">Corroborá tus datos!</h5>
                        <p class="card-text">Necesitamos que ingreses tus datos y corrobores que todo esté bien</p>
                        <a href="#" class="btn btn-warning text-white">Chequear Datos</a>

                    </div>
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
                            <h5 class="text-center align-center">Tarjeta 1</h5>
                        </div>

                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum optio commodi quas impedit vitae eaque reprehenderit eius ut et.</p>
                        <a href="#" class="btn btn-info text-white col-12">Boton Activo 1</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header color-bluecat-op text-white">
                            <h5 class="text-center align-center">Tarjeta 2</h5>
                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum optio commodi quas impedit vitae eaque reprehenderit eius ut et.</p>
                        <a href="#" class="btn btn-info text-white col-12">Boton Activo 2</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header color-bluecat-op text-white">
                            <h5 class="text-center align-center">Tarjeta 3</h5>
                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum optio commodi quas impedit vitae eaque reprehenderit eius ut et.</p>
                        <a href="#" class="btn btn-info text-white col-12">Boton Activo 3</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once('registroCivil/template/footer.php');  
?>