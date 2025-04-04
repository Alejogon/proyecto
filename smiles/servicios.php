<!--    Autor: Henry Alejandro Gonzalez Torres
        Fecha: Abril 2025
        Módulo: FrontEnd
        Politécnico Gran Colombiano
        Proyecto: Smiles - Clínica Dental-->
<!doctype html>
<html lang="en">
    <head>
        <title>Servicios</title>
        <link rel="icon" href="img/favico.png" type="image/x-icon">
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
        
        <main>
            <div class="container" style="margin-top: 20px;" >
                <div class="row" style="margin-top: 20px;">
                    <div class="col-sm-6">
                        <div class="card" style="width: 400px;">
                            <img src="img/ortodoncia.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Ortodoncia</h5>
                                <p class="card-text">La ortodoncia no solo mejora la estética 
                                                    dental, también puede prevenir problemas 
                                                    de salud bucal, como el apiñamiento dental 
                                                    y la mala mordida, que pueden causar caries, 
                                                    enfermedades de las encías, dolor de cabeza y 
                                                    otros problemas de salud.
                                                    Utilizamos la ultima tecnologia, casi invisible, 
                                                    alineadores son removibles, limpieza bucal 
                                                    sencilla y eficaz, sin controles mensauales

                                </p>
                                <a href="#" class="btn btn-primary">Ver mas...</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6" >
                        <div class="card" style="width: 400px;">
                            <img src="img/periodoncia.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Periodoncia</h5>
                                <p class="card-text">La endodoncia o tratamiento de conductos, 
                                                    es un procedimiento odontológico destinado 
                                                    a tratar la pulpa dental cuando está dañada o 
                                                    infectada, esto puede generarse debido a distintos 
                                                    factores como caries profunda, traumatismos o 
                                                    fracturas en el diente.
                                </p>
                                <a href="#" class="btn btn-primary">Ver mas...</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center" style="margin-top: 40px;">
                    <div class="col-sm-6" >
                        <div class="card" style="width: 400px;" >
                            <img src="img/rehabilitacion.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Rehabilitación</h5>
                                <p class="card-text">La rehabilitación oral combina una variedad 
                                                    de tratamientos y procedimientos con el objetivo 
                                                    de restaurar la función, la estética y la salud 
                                                    oral, devuelve la capacidad de masticar y 
                                                    triturar los alimentos de manera efectiva mejorando 
                                                    la calidad de vida de los pacientes.</p>
                                <a href="#" class="btn btn-primary">Ver mas...</a>
                            </div>
                        </div>
                    </div>

                    
                </div>


                            
            </div>
        </main>
        <footer>
            <!-- place footer here -->
            <?php include_once 'footer.php' ?>
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
