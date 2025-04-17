<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
}else if (isset($_GET['id_agenda'])) {
	
    include_once '../config/BDD.php';
    $id_agenda = $_GET['id_agenda'];
    $id_evento = $_GET['id_evento'];
    $db = new db;
    $PDO = $db->conexion();

    // Consulta para obtener todos los eventos de la base de datos
    try{
        $sql = "SELECT * FROM u672034110_poli.view_agenda WHERE id = :id";
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(':id', $id_agenda);
        $stmt->execute();
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo "Error: ". $e->getMessage();
        exit();
    }
    

}
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Cancelar Cita</title>
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
            <?php include_once 'encabezado.php' ?>
        </header>
        <main>
            <div class="container">
                <h1>Cancelar Cita</h1>
                
                <table class="table table-striped table-hover">
                
                <tbody>
                    <tr>
                        <th scope="row">Nombre del paciente</th>
                        <td><?php echo $_SESSION['nombre']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Cedula del Paciente</th>
                        <td><?php echo $_SESSION['id']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Fecha</th>
                        <td><?php echo $resultado['fecha']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Médico</th>
                        <td><?php echo $resultado['medico']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Centro Médico</th>
                        <td><?php echo $resultado['nombre']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Dirección</th>
                        <td><?php echo $resultado['direccion']?></td>
                    </tr>

                </tbody>
                
                </table>
                <form action="../controler/controlador_cancelar_cita.php" method="post">
                    <input type="hidden" name="id_agenda" value="<?php echo $id_agenda?>">
                    <input type="hidden" name="id_evento" value="<?php echo $id_evento?>">

                    <input type="hidden" name="nombre_paciente" value="<?php echo $_SESSION['nombre']?>">
                    <input type="hidden" name="id_paciente" value="<?php echo $_SESSION['id']?>">
                    <input type="hidden" name="fecha" value="<?php echo $resultado['fecha']?>">
                    <input type="hidden" name="medico" value="<?php echo $resultado['medico']?>">
                    <input type="hidden" name="nombre_ubicacion" value="<?php echo $resultado['nombre']?>">
                    <input type="hidden" name="direccion" value="<?php echo $resultado['direccion']?>">
                    <input type="hidden" name="telefono_paciente" value="<?php echo $_SESSION['telefono']?>">
                    <input type="hidden" name="correo_paciente" value="<?php echo $_SESSION['correo']?>">
                    
                    <button type="submit" class="btn btn-danger">Cancelar</button>
                    <a href="view_agendar.php" class="btn btn-primary">Volver</a>
                </form>
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
