<?php


if(empty($_GET['id_agenda'])){

}else{
    session_start();

    $id_usuario = $_SESSION['id'];
    $id_agenda = $_GET['id_agenda'];
    include_once '../config/BDD.php';
    try{
        $db = new db;
        $PDO = $db->conexion();
    }catch(PDOException $e){
        echo "Error: ". $e->getMessage();
        exit();
    }
    actualizar_estado_agenda($PDO, $id_agenda);
    crear_evento($PDO, $id_agenda, $id_usuario);

}


header('Location: ../inicio.php');
function actualizar_estado_agenda($PDO, $id_agenda){
    try{
        $sql = "UPDATE u672034110_poli.agenda SET estado = 'a' WHERE id = :id";
        $stmt = $PDO->prepare($sql);
        $stmt->execute(array(
            ':id' => $id_agenda
        ));
    }catch(PDOException $e){
        echo "Error: ". $e->getMessage();
        exit();
    }
}
function crear_evento($PDO, $id_agenda, $id_usuario){
    echo "entro a la funcion crear evento";
    try{
        $sql = "INSERT INTO u672034110_poli.evento (id_agenda, id_paciente, estado)
                    VALUES (:id_agenda, :id_usuario, :estado)";
        $resultado = $PDO->prepare($sql);
        $resultado->execute(array(
            ':id_agenda' => $id_agenda,
            ':id_usuario' => $id_usuario,
            ':estado' => 'a'
            ));
        
       echo "se creo el evento";
    }catch(PDOException $e){
        echo "Error: ". $e->getMessage();
        exit();
    }

}



?>