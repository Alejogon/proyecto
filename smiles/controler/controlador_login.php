<?php
if(!empty($_POST['btningresar'])){
    if(!empty($_POST['id'])&&!empty($_POST['password'])){
        $id = $_POST['id'];
        $password = $_POST['password'];
        $password = md5($password);
        include_once 'config/BDD.php';
        $db = new db;
        $PDO = $db->conexion();
        $usuario = validarusuario($PDO, $id, $password);
        if($usuario){
            session_start();
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nombre'] = $usuario['nombre'];
            $_SESSION['correo'] = $usuario['correo'];
            $_SESSION['telefono'] = $usuario['telefono'];
            
            
            header("location: inicio.php");

        }
       

    }else {
        echo "<div class='alert alert-danger'>Datos incompletos</div>";

    }
}

function validarusuario($PDO, $id, $password){
    $sql = "SELECT * FROM u672034110_poli.usuario WHERE id = :id";
    $resultado = $PDO->prepare($sql);
    $resultado->execute(array(
        ':id' => $id
    ));
    $respuesta = $resultado->fetch(PDO::FETCH_ASSOC);
    if($respuesta){
        if($password == $respuesta['password']){
            return $respuesta;
        }else{
            echo "<div class='alert alert-danger'>Contraseña incorrecta</div>";
        }
    }else{
        echo "<div class='alert alert-danger'>Usuario no encontrado</div>";
    }
    

}

?>