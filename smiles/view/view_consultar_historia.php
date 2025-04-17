<?php
session_start();
$id_paciente = $_SESSION['id'];


include_once '../config/BDD.php';
$db = new db;
$PDO = $db->conexion();


//$sql = "SELECT * FROM u672034110_poli.agenda WHERE estado = 'd'";
$sql = "SELECT * FROM u672034110_poli.view_evento WHERE id_paciente = ".$id_paciente;

$resultado = $PDO->prepare($sql);

$resultado->execute();

//$eventos = $resultado->fetchAll(PDO::FETCH_ASSOC);

//echo json_encode($eventos);





?> 



<!doctype html>
<html lang="en">
    <head>
        <title>Consulta Historia Médica</title>
        <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
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
            <!-- place navbar here -->
            <?php include_once 'encabezado.php' ?>
        </header>
        <main>
            
            <div class="container">
                <h1>Historia médica</h1>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                        
                        <th scope="col">Fecha</th>
                        <th scope="col">Médico</th>
                        <th scope="col">Observación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Iterar sobre los resultados
                        foreach ($resultado as $fila) {
                        echo '<tr>';
                        
                        echo '<td>'. $fila['fecha']. '</td>'; 
                        echo '<td>'. $fila['medico']. '</td>';
                        echo '<td>'. $fila['observacion']. '</td>';


                        }
                        ?>

                    </tbody>
                
                </table>
           
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
