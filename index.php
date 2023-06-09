<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="./src/img/firma digital-2.webp" type="image/x-icon">
    <title>BUSQUEDA FIRMA DIGITAL</title>
</head>

<body>
    <div class="background">
        <div class="icon-help">
            <div class="icon-help">
                <svg xmlns="http://www.w3.org/2000/svg" width="30px" fill="currentColor" class="bi bi-question-square" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                </svg>
            </div>
        </div>
        <div class="contenedor-datos">
            <div class="icon-close">
                <svg xmlns="http://www.w3.org/2000/svg" width="30px" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </div>
            <div class="text-contenedor">
                <h5>Lista Empleados - Codigo Trabajador</h5>
                <?php 
                require_once 'src/controlador/empleados.controlador.php'
                ?>
            </div>
        </div>
        <div class="contenedor">
            <div class="titulo">
                <h1>BUSCADOR DE FIRMAS DIGITALES</h1>
                <div class="subtitulo">
                    <h5>
                        Las firmas digitales ya disponibles, podras
                        encontrar tu firma con solo tu codigo de
                        empleado, unico para cada personal
                    </h5>
                </div>
                <img src="./src/img/firma digital-2.webp" alt="">
            </div>
            <div class="input-codigo">
                <form action="" method="post">
                    <input type="text" name="codigo" placeholder="Codigo Trabajador">
                    <input type="submit" value="Buscar" name="buscar">
                </form>
            </div>
        </div>
        <div class="img-firma">
            <?php
            require_once 'src/controlador/firma-controlador.php'
            ?>
        </div>
    </div>
    <script src="src/js/alert.js"></script>
</body>

</html>