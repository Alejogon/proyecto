<!doctype html>
<html lang="en">
    <head>
        <title>Ingreso</title>
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
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
        <link rel="icon" href="img/favico.png" type="image/x-icon">
        <style>
            /* Add custom styles here */
            body { 
                background: linear-gradient(to right,rgba(185, 212, 247, 0.6), #ffffff ) ;
            
            }
            
            .bg{
                background-image: url('img/fondo_form.jpg');
                background-position: center center;
                
            }
            
        </style>
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
            <div class="container   mt-5 rounded">
                <div class="row bg">               
                      <div class="col ">
                        <div class="text-center">
                            <img src="img/logoDental.png" alt="Logo" class="img-fluid mt-5" width="200px" height="200px"/>
                        </div>
                        <h2 class="fw-bold text-center pt-5 mb-5">Bienvenido</h2>
                        <div class="text-center">
                            <?php include 'controler/controlador_login.php'?>
                        </div>
                        <form action="" method="post">
                            <div class="mb-4">
                                <label for="id" class="form-label">Cedula</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="id"
                                    name="id"
                                    
                                />
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input
                                    type="password"
                                    class="form-control"
                                    id="password"
                                    name="password"
                                />
                            </div>
                            <div class="d-grid">
                                <input name="btningresar" type="submit" class="btn btn-primary" value="Iniciar Sesion"/>
                            </div>
                            <div class="my-3">
                                <span>¿No tienes cuenta? <a href="formnewuser.html">Registrate</a></span><br>
                                <span>¿Olvidaste tu contraseña? <a href="#">Recuperar Contraseña</a></span>
                            </div>

                    </div>
                    <div class="col d-none d-lg-block">
                        
                    </div>
                </div>

            </div>
        </main>
        <footer>
            <!-- Footer here -->
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
