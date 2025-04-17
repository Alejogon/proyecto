<?php

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $telefono = $_POST['phone'];
    
    $password = md5($password);
    include_once 'config/BDD.php';
    $db = new db;
    $PDO = $db->conexion();

    $repetido = validarid($PDO, $id);
    if($repetido["COUNT(*)"]){
        echo "El id ya existe"."<br>";
        echo "<a href='formnewuser.html'>Volver</a>";
    } else{
        $sql = "INSERT INTO u672034110_poli.usuario(id, nombre, telefono, correo, password, tipo, estado)
            VALUES (:id, :nombre, :telefono, :email, :password, :tipo, :estado)";
        $resultado = $PDO->prepare($sql);
        $resultado->execute(array(
            ':id' => $id,
            ':nombre' => $nombre,
            ':email' => $email,
            ':password' => $password,
            ':telefono' => $telefono,
            ':tipo' => 'P', // Paciente, Medico, Administrador
            ':estado' => 1 // Activo, Inactivo, Borrado
        ));
        echo "Registro exitoso"."<br>";
        echo "<a href='login.php'>Volver</a>";

    }


}else{
    header('Location: formnewuser.html');
}

function validarid($PDO, $id){
    $sql = "SELECT COUNT(*) FROM u672034110_poli.usuario WHERE id = :id";
    $resultado = $PDO->prepare($sql);
    $resultado->execute(array(
        ':id' => $id
    ));
    $respuesta = $resultado->fetch(PDO::FETCH_ASSOC);
    
    return $respuesta;

}


?>