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
<div id="register">
  <div class="container">
    <main>
      <div class="py-5 text-center">
        <h2>Registro de Agentes</h2>
        <p class="lead">Completar formulario con los datos del agente</p>
      </div>
      <div id="register-row" class="row justify-content-center align-items-center col-sm-10 col-md-8 text-dark">

        <form role="form" name="guardar-registro-persona" id="guardar-registro-persona" method="post" action="./modelos//modelo-registrado-registroCivil.php">
          <div class="row g-3 pt-5">
            <small>(<strong class="text-danger h-1">*</strong>) Campos obligatorios</small>
            <div class="col-sm-6">
              <label for="nombre" class="form-label">Nombre <strong class="text-danger h-1">*</strong></label>
              <input type="text" class="form-control" name="nombre" value="" placeholder="" required>

            </div>
            <div class="col-sm-6">
              <label for="apellido" class="form-label">Apellido <strong class="text-danger h-1">*</strong></label>
              <input type="text" name="apellido" class="form-control" value="" placeholder="" required>

            </div>

            <div class="col-12">
              <label for="dni" class="form-label">DNI <strong class="text-danger h-1">*</strong></label>

              <input type="text" name="dni" class="form-control" id="username" value="" placeholder="Ingresa tu DNI" required>


            </div>

            <div class="col-md-12">
              <label for="cargo" class="form-label">Cargo <strong class="text-danger h-1">*</strong></label>
              <select class="form-select" id="cargo" name="cargo" required>
              <option selected disabled>Seleccione cargo</option>
              <option value="comisariogeneral">Comisario General</option>
              <option value="comisariogeneral">Comisario Mayor</option>
              <option value="comisariogeneral">Comisario Inspector</option>
              <option value="subcomisario">Sub Comisario</option>
              </select>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <strong class="text-danger h-1">*</strong></label>
              <input type="email" name="correo" value="" class="form-control" id="email" placeholder="tu@ejemplo.com" required>

            </div>

            <div class="col-12">
              <label for="date" class="form-label">Fecha de nacimiento <strong class="text-danger h-1">*</strong></label>
              <input type="date" class="form-control" value="" name="fecha_nac" min="1900-01-01" required>

            </div>

            <div class="col-12">
              <label for="tel" class="form-label">Télefono <strong class="text-danger h-1">*</strong></label>
              <input type="tel" value="" name="telefono" class="form-control" required>
              <small>Ejemplo: 3834 858585</small>

            </div>

            <div class="col-md-12">
              <label for="pais" class="form-label">Nacionalidad <strong class="text-danger h-1">*</strong></label>
              <select class="form-select" id="paises" name="nacionalidad" required>
              <option selected disabled>Seleccione un pais</option>
              </select>
            </div>


            <div class="col-md-5">
              <label for="number" class="form-label">Latitud</label>
              <input type="text" value="" class="form-control" name="latitud" placeholder="" required>
            </div>

            <div class="col-md-5">
              <label for="number" class="form-label">Longitud</label>
              <input type="text" value="" class="form-control" name="longitud" placeholder="" required>

            </div>
            <div class="col-md-2 d-flex align-items-end">
              <i class="  btn btn-danger  fas fa-map-marker-alt" style="font-size: 24px" id='verMap'></i>
            </div>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Sexo <strong class="text-danger h-1">*</strong></h4>

          <div class="my-3">
            <div class="form-check">
              <input id="femenino" name="sexo" type="radio" class="form-check-input" value="femenino" required>
              <label class="form-check-label" for="femenino">Femenino</label>
            </div>
            <div class="form-check">
              <input id="masculino" name="sexo" type="radio" class="form-check-input" value="masculino">
              <label class="form-check-label" for="masculino">Masculino</label>
            </div>
          </div>
          <hr class="my-4">
          <div class="box-footer">
            <input type="hidden" name="registro_persona" value="nuevo">
            <button type="submit" class="w-100 btn btn-info btn-lg text-white" id="registro_persona">Registrar</button>
          </div>

        </form>

        <!-- mapa -->
        <div class="hide" id="window-notice">
          <div class="row">
            <div class="col-12 mt-5">
              <div class="rounded" id="map">

              </div>
            </div>
            <div class="col-12">
              <div class="container map-controllers d-flex justify-content-center pt-2 ">

              </div>
            </div>
          </div>

        </div><!-- /mapa -->
      </div>
  </div>

</div>
<br>
<script src="./assets/js/funciones.js"></script>
<script src="./assets/js/map.js" type="module"></script>

<?php
include_once('./template/footer.php');
?>