<?php
session_start();
if(!empty($_POST['id_agenda'] AND !empty($_POST['id_evento']))){

    $id_agenda = $_POST['id_agenda'];
    $id_evento = $_POST['id_evento'];
    include_once '../config/BDD.php';
    $db = new db;
    $PDO = $db->conexion();
    actualizarEvento($PDO, $id_evento);
    actualizarAgenda($PDO, $id_agenda);
}else{
    header('Location:../inicio.php');
}



function actualizarEvento($PDO, $id_evento){
    try{       
        $sql = "UPDATE u672034110_poli.evento SET estado = 'c', observacion = 'Cancelada por el usuario' WHERE id = ".$id_evento."";
        $stmt = $PDO->prepare($sql);
        $stmt->execute();
        //echo "evento actualizada"."<br>"; 
           
        
    }catch(PDOException $e){
        echo "Error: ". $e->getMessage();
        exit();
    }
    

}

function actualizarAgenda($PDO, $id_agenda){
    try{  
        $sql = "UPDATE u672034110_poli.agenda SET estado = 'd' WHERE id = ".$id_agenda."";
        $stmt = $PDO->prepare($sql);
        $stmt->execute();       
        //echo "agenda actualizada"."<br>"; 
    }catch(PDOException $e){
        echo "Error: ". $e->getMessage();
        exit();
    }
}

?>
<!doctype html>
<html lang="en">
    <head>
        <title>Confirmación Cita Cancelada</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <?php include_once '../view/encabezado.php' ?>
            
        </header>
        <main>
            <div class="container">
            <h1>Hola <?php echo $_SESSION['nombre']?> </h1>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success" role="alert">
                            Su cita fue cancelada con éxito.
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
