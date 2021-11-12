<?php
include_once './config/environment.php';
$conn = new mysqli(SERVIDOR_DB.":".PORT,USUARIO_DB,PASSWORD_DB, NOMBRE_DB);

if($conn->connect_error) {
  echo $error->$conn->connect_error;
}

?>