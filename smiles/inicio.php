<?php 
session_start();
if(empty($_SESSION['id'])){
    header("Location: login.php");
    exit();
}

?>

<!doctype html>
<html lang="es">
    <head>
        <title>Usuario</title>
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
           <?php include_once 'view/encabezado.php' ?>
             
        </header>
        <main>
            <div class="container">
                <!-- place your content here -->
                 <h1>Hola <?php echo $_SESSION['nombre']?> </h1>
                 
            </div>
                
        </main>
        <footer>
            <!-- place footer here -->
            <a href="https://wa.me/573138965830" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>

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
