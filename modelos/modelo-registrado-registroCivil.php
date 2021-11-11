<?php 
include_once '../admin/funciones/funciones.php';

/***********Nueva Persona*******/
if($_POST['registro_persona'] == 'nuevo'){

    $dni= $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nac = $_POST['fecha_nac'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $nacionalidad = $_POST['nacionalidad'];
    $sexo = $_POST['sexo'];
    $latitud = $_POST['latitud'];
    $longitud = $_POST['longitud'];

   try{
    $stmt= $conn->prepare("INSERT INTO personas (dni,nombre,apellido,fecha_nac,telefono,correo,nacionalidad,sexo,latitud,longitud) VALUES (?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("isssssssss",$dni,$nombre, $apellido,$fecha_nac,$telefono,$correo,$nacionalidad,$sexo,$latitud,$longitud);
    //ejecuto el stmt
    $stmt->execute(); 
    
    $id_registro= $stmt->insert_id;
    if( $id_registro>0){
        $respuesta= array(
            'respuesta'=> 'exito',
            'id_admin'=>$id_registro //regresa la info
        );
    }else{
        $respuesta= array(
            'respuesta'=> 'error, no se cargo',
            
        );
    };
    $stmt->close();
    $conn->close();

   }catch(Exception $e){
       echo "Error: " .$e->getMessage();
   }
   die(json_encode($respuesta));
};



//***********EDITAR***** */
if($_POST['registro_persona']=='actualizar'){
    $id_modificar = $_POST['modificar'];
    $dni= $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nac = $_POST['fecha_nac'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $nacionalidad = $_POST['nacionalidad'];
    $sexo = $_POST['sexo'];
    $latitud = $_POST['latitud'];
    $longitud = $_POST['longitud'];

    try{
     
            $stmt= $conn->prepare('UPDATE personas SET dni=?,nombre=?,apellido=?,fecha_nac=?,telefono=?,correo=?,nacionalidad=?,sexo=?,latitud=?,longitud=? WHERE dni= ? ');
            $stmt->bind_param("isssssssssi",$dni,$nombre, $apellido,$fecha_nac,$telefono,$correo,$nacionalidad,$sexo,$latitud,$longitud,$id_modificar);
        
        $stmt->execute();
        if($stmt->affected_rows){
            $respuesta= array(
                'respuesta'=> 'exito',
                'id_actualizado'=>$stmt->insert_id
            );
        }else{
            $respuesta=array(
                'respuesta' =>'error'
            );
        }
        $stmt->close();
        $conn->close();
    }catch(Exception $e){
        $respuesta=array(
            'respuesta'=>$e->getMessage()
        );
    }
   die(json_encode($respuesta));
};


/***********Elimina del listado de persona*******/
if($_POST['registro_persona'] == 'eliminar'){
    $id_borrar= $_POST['id'];                                                                                                                                                                                                                                                                                

    try{
        $stmt= $conn->prepare('DELETE FROM personas WHERE dni= ?');
        $stmt-> bind_param('s', $id_borrar);
        $stmt->execute();
        if($stmt->affected_rows){
            $respuesta=array(
                'respuesta'=> 'exito',
                'id_eliminado'=> $id_borrar
            );
        }else{
            $respuesta=array(
                'respuesta'=> 'error'
            );
        }
        $stmt->close();
        $conn->close();
    }catch(Exception $e){
        $respuesta=array(
            'respuesta'=>$e->getMessage()
        );
    }
    
    die(json_encode($respuesta));
}
?>