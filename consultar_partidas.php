<?php include_once './admin/funciones/funciones.php';
include_once './config/config.php';
include_once('./template/header.php');
?>

<div class="d-flex align-items-center p-3  text-white rounded shadow-sm color-bluecat">
    <div class="col d-flex align-items-center">
        <img class="me-3" src="<?php echo img ?>princicon.png" alt="" width="48" height="48">
        <div class="lh-1">
            <h1 class="h5 mb-0 text-white lh-1 animate__animated animate__headShake">Ministerios y Tramites</h1>
            <h6 class="animate__animated animate__headShake">Gobierno de Catamarca</h6>
        </div>
    </div>
</div>

<div id="register">
    <div class="container">
        <main>
            <div class="py-5 text-center">
                <h2>Solicitud de Partidas</h2>
                <p>Completa el siguiente formulario con tus datos</p>
            </div>
            <div id="register-row" class="row justify-content-center align-items-baseline col-sm-10 col-md-8 text-dark">
                <form action="" method="POST" class="needs-validation pt-5">
                    <div class="row g-3 ">
                        <small>(<strong class="text-danger h-1">*</strong>) Campos obligatorios</small>
                        <div class="col-sm-6">
                            <label for="solicitante" name="solicitante" class="form-label">DNI del Solicitante <strong class="text-danger h-1">*</strong></label>
                            <input type="text" class="form-control" name="solicitante" placeholder="ej: 41151030" required>
                            <div class="invalid-feedback">
                                Campo obligatorio
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="email" class="form-label">Email del Solicitante <strong class="text-danger h-1">*</strong></label>
                            <input type="email" class="form-control" name="email" placeholder="tu@ejemplo.com" required>
                            <div class="invalid-feedback">
                                Ingrese un email valido
                            </div>
                        </div>
                        <hr>
                        <h4 class="mb-0 mt-1">Tipo de Partida<strong class="text-danger h-1">*</strong></h4>
                        <div class="mt-1 partidas">
                            <div class="form-check">

                                <input name="partida" type="radio" class="form-check-input " value="nacimiento" checked required>
                                <label class="form-check-label" for="nacimiento">Nacimiento</label>
                            </div>
                            <div class="form-check">
                                <input name="partida" type="radio" class="form-check-input" value="matrimonio" required>
                                <label class="form-check-label" for="matrimonio">Matrimonio</label>
                            </div>
                            <div class="form-check">
                                <input name="partida" type="radio" class="form-check-input" value="defuncion" required>
                                <label class="form-check-label" for="defuncion">Defunción</label>
                            </div>
                        </div>
                        <div id="nacimiento" class="hide solicitud-Partida">
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-2">
                                    <label for="nombre" name="nombre" class="form-label">Nombre <strong class="text-danger h-1">*</strong></label>
                                    <input type="text" class="form-control" name="nombre" placeholder="ej: Juan" required>
                                    <div class="invalid-feedback">
                                        Campo obligatorio
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <label for="apellido" class="form-label">Apellido <strong class="text-danger h-1">*</strong></label>
                                    <input type="text" class="form-control" name="apellido" placeholder="ej: Álvarez" required>
                                    <div class="invalid-feedback">
                                        Campo obligatorio
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label for="dni" class="form-label">DNI<strong class="text-danger h-1">*</strong></label>
                                    <div class="input-group has-validation">
                                        <input type="number" class="form-control" name="dni" placeholder="Ingresa tu DNI" required>
                                        <div class="invalid-feedback">
                                            Campo obligatorio
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="fecha" name="fecha" class="form-label">Fecha Nacimiento</label>
                                    <input type="date" class="form-control" id="fecha" required>
                                    <div class="invalid-feedback">
                                        Campo obligatorio
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="matrimonio" class="hide solicitud-Partida">
                            <div class="row mb-2">
                                <div class="col-sm-6 mb-2">
                                    <label for="nombre" name="nombre" class="form-label">Nombre <strong class="text-danger h-1">*</strong></label>
                                    <input type="text" class="form-control" name="nombre" placeholder="ej: Juan" required>
                                    <div class="invalid-feedback">
                                        Campo obligatorio
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <label for="apellido" class="form-label">Apellido <strong class="text-danger h-1">*</strong></label>
                                    <input type="text" class="form-control" name="apellido" placeholder="ej: Álvarez" required>
                                    <div class="invalid-feedback">
                                        Campo obligatorio
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label for="dni" class="form-label">DNI<strong class="text-danger h-1">*</strong></label>
                                    <div class="input-group has-validation">
                                        <input type="number" class="form-control" name="dni" placeholder="Ingresa tu DNI" required>
                                        <div class="invalid-feedback">
                                            Campo obligatorio
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label for="matrimonio" name="tomo" class="form-label">N° de tomo</label>
                                    <input type="text" class="form-control" id="tomo" maxlength="8" placeholder="ej:235147" required>
                                    <div class="invalid-feedback">
                                        Campo obligatorio
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="matrimonio" name="acta" class="form-label">N° de Acta</label>
                                    <input type="text" class="form-control" id="acta" maxlength="6" placeholder="ej:124891" required>
                                    <div class="invalid-feedback">
                                        Campo obligatorio
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="matrimonio" name="libreta" class="form-label">N° de Libreta</label>
                                    <input type="text" class="form-control" id="libreta" maxlength="6" placeholder="ej:541287" required>
                                    <div class="invalid-feedback">
                                        Campo obligatorio
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="defuncion" class="hide solicitud-Partida">
                        <div class="row mb-3">
                            <div class="col-sm-6 mb-2">
                                <label for="nombre" name="nombre" class="form-label">Nombre <strong class="text-danger h-1">*</strong></label>
                                <input type="text" class="form-control" name="nombre" placeholder="ej: Juan" required>
                                <div class="invalid-feedback">
                                    Campo obligatorio
                                </div>
                            </div>

                            <div class="col-sm-6 mb-2">
                                <label for="apellido" class="form-label">Apellido <strong class="text-danger h-1">*</strong></label>
                                <input type="text" class="form-control" name="apellido" placeholder="ej: Álvarez" required>
                                <div class="invalid-feedback">
                                    Campo obligatorio
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="dni" class="form-label">DNI<strong class="text-danger h-1">*</strong></label>
                                <div class="input-group has-validation">
                                    <input type="number" class="form-control" name="dni" placeholder="Ingresa tu DNI" required>
                                    <div class="invalid-feedback">
                                        Campo obligatorio
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="fechadef" name="fechadef" class="form-label">Fecha de Defunción</label>
                                <input type="date" class="form-control" id="fechadef" required>
                                <div class="invalid-feedback">
                                    Campo obligatorio
                                </div>
                            </div>

                        </div>
                    </div>

                    <input class="w-100 btn btn-info btn-lg " type="submit" value="Solicitar"></input>
                </form>
            </div>
    </div>
</div>
<script src="./assets/js/main.js"></script>

<?php
include_once('./template/footer.php');
?>