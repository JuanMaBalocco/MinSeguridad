<?php include_once './admin/funciones/funciones.php';
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
                        <a class="nav-link color-backgray-anim" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active color-backgray-anim" href="index_seguridad.php">Ministerio de Seguridad</a>
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


        <!-- BANNER Y NOTIFICACIONES -->
        <div class="row">

            <div class="col ">

                <div class="regimag">

                </div>

            </div>
            <div class="col-4">

                <div class="card">

                    <h5 class="card-header bg-danger text-white "><i class="fas fa-exclamation-circle"></i> Carga de detenidos</h5>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="#" class="btn btn-warning text-white">Cargar</a>

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
                            <h5 class="text-center align-center">Registrar Comisarios y Agentes</h5>
                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum optio commodi quas impedit vitae eaque reprehenderit eius ut et.</p>
                        <a href="registrar_agentes.php" class="btn btn-info text-white col-12">Cargar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header color-bluecat-op text-white">
                            <h5 class="text-center align-center">Listado de Comisarias</h5>
                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum optio commodi quas impedit vitae eaque reprehenderit eius ut et.</p>
                        <a href="listado_personas.php" class="btn btn-info text-white col-12">Ver</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header color-bluecat-op text-white">
                            <h5 class="text-center align-center">Vehiculos</h5>
                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum optio commodi quas impedit vitae eaque reprehenderit eius ut et.</p>
                        <a href="consultar_partidas.php" class="btn btn-info text-white col-12">Consultar disponibilidad</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once('./template/footer.php');
?>