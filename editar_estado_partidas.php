<?php
include('config/config.php');
include(header);
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

<div class="container p-4">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row ">
                <div class="col-sm-8">
                    <h2 class="text-uppercase"> Estado Solicitud</h2>
                </div>

                <div class="col-sm-4 ">
                    <form action="" class="form-buscar float-end ">
                        <input type="text" placeholder="">
                        <input type="button" value="Buscar" class="btn color-bluecat text-white">

                    </form>

                </div>
            </div>
        </div>
    </div>

    <table class="table table-bordered text-center">
        <thead class="color-bluecat text-white">
            <tr>
                <!-- <th>Fecha</th> -->
                <th>Nro Solicitud</th>
                <th>DNI</th>
                <th>Titular</th>
                <th>Tipo Partida</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th>123000</th>
                <td>34587458</td>
                <td>Juan Perez</td>
                <td>Nacimiento</td>
                <td>
                 <div class="row d-flex justify-content-center">
                    <div class="col-8 pe-0">
                        <select class="form-select " id="estados" required>

                            <option value="">Pendiente</option>
                            <option value="">En curso</option>
                            <option value="">Denegada</option>
                            <option value="">Entregada</option>
                        </select>
                    </div>
                  </div>
                </td>
                <td>
                <div class="row d-flex justify-content-center">
                <div class="col-6 d-flex justify-content-end ">
                       <a class="btn color-bluecat  text-white fw-bold " type="button"  ><i class="fas fa-upload"></i></a> 
                       
                    </div>
                    <div class="col-4 d-flex justify-content-start ">
                    <a class="btn btn-success  text-white fw-bold " type="button"  > <i class="far fa-save"></i></a>              

                    </div>

                </td>


            </tr>
            <tr>
                <th>125321</th>
                <td>40421421</td>
                <td>Lucia Juarez</td>
                <td>Defuncion</td>
                <td>
                <div class="row d-flex justify-content-center">
                    <div class="col-8 pe-0">
                        <select class="form-select " id="estados" required>

                            <option value="">Pendiente</option>
                            <option value="">En curso</option>
                            <option value="">Denegada</option>
                            <option value="">Entregada</option>
                        </select>
                    </div>
                  </div>
                
                </td>

                <td>

                    <div class="row d-flex justify-content-center">
                    
                    <div class="col-6 d-flex justify-content-end ">
                       <a class="btn color-bluecat  text-white fw-bold " type="button"  ><i class="fas fa-upload"></i></a> 
                       
                    </div>
                    <div class="col-4 d-flex justify-content-start ">
                    <a class="btn btn-success  text-white fw-bold " type="button"  > <i class="far fa-save"></i></a>              

                    </div>
                    </div>
                    
                     



                </td>
            </tr>


        </tbody>
    </table>
</div>

<?php

include(footer);

?>