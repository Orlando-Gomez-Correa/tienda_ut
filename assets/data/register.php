<?php
    include('conexion_registro.php');

    $obj = new Conexion;

    $user = $_POST['inputUsuario'];
    $pass = $_POST['inputContrasena'];
    $nombre = $_POST['inputNombre'];
    $correo = $_POST['inputEmail'];
    $res = $obj->insertarUsuario($user, $pass, $nombre, $correo);
    if($res == 1){
        $datos = array('dato' => 'ok');
    }else{
        $datos = array('dato' => 'no');
    }
   
    echo json_encode($datos, JSON_FORCE_OBJECT);
?>
