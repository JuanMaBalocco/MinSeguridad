<?php include_once './admin/funciones/funciones.php';
include_once './config/config.php';
include_once('./template/header.php');

$dni = $_GET['modificar'];
$sql = "SELECT * FROM `personas` WHERE `dni`= $dni";
$resultado = $conn->query($sql);
$datos = $resultado->fetch_assoc();
?>
<link href="./assets/css/profile_person.css" rel="stylesheet">
<div class="">
    <div class="d-flex align-items-center p-3 my-0 text-white rounded shadow-sm color-bluecat">
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

    <div class="row">
        <div class="main-content">
            <!-- END NAV TABS -->
            <div class="tab-content profile-page">
                <!-- PROFILE TAB CONTENT -->
                <div class="tab-pane profile active" id="profile-tab">
                    <div class="row justify-content-around">

                        <div class="col-md-9 bg-white rounded shadow-lg">
                            <div class="user-info-right  mt-2">
                                <img class="img-responsive  border border-dark" width="150px" height="150px" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Picture">
                            </div>
                            <div class="user-info-right">
                                <div class="basic-info">
                                    <h3><i class="fa fa-square"></i> Información Básica</h3>
                                    <p class="data-row">
                                        <span class="data-name">Nombre:</span>
                                        <span class="data-value"><?php echo $datos['nombre'] ?></span>
                                    </p>
                                    <p class="data-row">
                                        <span class="data-name">Apellido:</span>
                                        <span class="data-value"><?php echo $datos['apellido'] ?></span>
                                    </p>
                                    <p class="data-row">
                                        <span class="data-name">Sexo:</span>
                                        <span class="data-value"><?php echo $datos['sexo'] ?></span>
                                    </p>
                                    <p class="data-row">
                                        <span class="data-name">DNI:</span>
                                        <span class="data-value"><?php echo $datos['dni'] ?></span>
                                    </p>
                                    <p class="data-row">
                                        <span class="data-name">Nacionalidad:</span>
                                        <span class="data-value"><?php echo $datos['nacionalidad'] ?></span>
                                    </p>
                                </div>
                                <div class="Información de Contacto">
                                    <h3><i class="fa fa-square"></i> Información de Contacto</h3>
                                    <p class="data-row">
                                        <span class="data-name">Email:</span>
                                        <span class="data-value"><?php echo $datos['correo'] ?></span>
                                    </p>
                                    <p class="data-row">
                                        <span class="data-name">Telefono:</span>
                                        <span class="data-value"><?php echo $datos['telefono'] ?></span>
                                    </p>
                                    <p class="data-row">
                                        <span class="data-name">Latitud: </span>
                                        <span class="data-value" id="latitud"><?php echo $datos['latitud'] ?></span>
                                    </p>
                                    <p class="data-row">
                                        <span class="data-name">Longitud: </span>
                                        <span class="data-value" id="longitud"><?php echo $datos['longitud'] ?></span>
                                    </p>
                                    <div class="rounded" id="mapPerfil" style="height: 250px;">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </div>
   
</div>
<div class="mb-5 float-end">
<a href="listado_personas.php" class="btn btn-lg color-bluecat text-white mb-5 me-5 p-2">Volver</a>
</div>
      
<script src="./assets/js/map.js" type="module"></script>

<?php
include_once('./template/footer.php');
?>