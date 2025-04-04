<!doctype html>
<html lang="en">
    <head>
        <title>Nuevo Usuario</title>
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
            <div class="container">
            <img alt="Smiles" src="img/formulario.jpg"  class="img-fluid" />
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <!-- Form -->
                        <form id="formulario" action="newuser.php" method="post">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    required
                                />
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    required
                                />
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Telefono</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="phone"
                                    name="phone"
                                    required
                                />
                            <div class="mb-3">
                                <label for="coment" class="form-label">Comentario</label>
                                <textarea
                                    
                                    class="form-control"
                                    id="coment"
                                    name="coment"
                                    rows="5"
                                    required
                                ></textarea>
                            </div>
                            <div class="d-grid"></div>
                                <button type="submit" class="btn btn-primary">  Enviar</button>
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
