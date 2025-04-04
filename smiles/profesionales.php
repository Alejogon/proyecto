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
        <!-- place navbar here -->
        <?php include_once 'encabezado_public.php' ?>
    </header>
        <!-- content here -->
        <div class="imagen">
            <image src="img/odontologa1.jpg" alt="equipo" width="400px">
        </div>
        <div id ="texto">
            <h2><strong>Dra. María Fernanda Castro S.</strong><br></h2>
            <p>
                            Odontóloga egresada de la universidad 
                            del bosque, Endodoncista, Con más de 15 
                            años de experiencia en Tratamientos de 
                            Conductos es experta en tratar caries profundas, 
                            fracturas, abscesos y trauma dentoalveolar en sus paciente
            </p>
        </div>

        <div class="imagen2">
            <image src="img/odontologo2.jpg" alt="equipo" width="400px">
        </div>
        <div id ="texto2">
            <h2><strong>Dr. Sergio Mendoza B.</strong><br></h2>
            <p>Odontólogo egresado de la universidad Nacional de Colombia, 
                El especialista en Ortodoncia y Ortopedia Maxilar, 7 años de experiencia, 
                competente con una sólida formación clínica y caracterizado por cumplir 
                con la misión social y mejorar la calidad de vida de sus pacientes.
            </p>
        </div>

        <div class="imagen">
            <image src="img/odontologa.jpg" alt="equipo" width="400px">
        </div>
        <div id ="texto3">
            <h2><strong>Dra. Catalina Sarmiento P.</strong><br></h2>
            <p>Odontóloga egresada de la universidad del bosque, 
                Endodoncista, Con más de 15 años de experiencia en 
                Tratamientos de Conductos es experta en tratar caries profundas, 
                fracturas, abscesos y trauma dentoalveolar en sus paciente
            </p>
        </div>


    <footer>
         <!-- Footer here -->
         <?php include_once 'footer.php' ?>
    </footer>
</body>
</html>