<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="img/favico.png" type="image/x-icon">
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
        <link
            href="css/footer.css"
            rel="stylesheet"
        />
        <link
            href="css/cuerpo.css"
            rel="stylesheet"
        />
        
</head>
<body>
    <header>
        <!--  navbar here -->
        <?php include_once 'encabezado_public.php' ?>
    </header>

     <!-- content here -->

     <div >
        <div class="imagen">
            <image src="img/homeImg.jpg" alt="equipo"  width="800px">
        </div>
        <div class="logo">
            <image src="img/logoDental.png" alt="equipo" class="img-fluid" width="800px">
        </div>
     </div>

        


    <footer>
         <!-- Footer here -->
         <?php include_once 'footer.php' ?>
    </footer>
</body>
</html>