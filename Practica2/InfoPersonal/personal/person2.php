<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sakura Dreams - Cocinero Secundario 1    </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Restaurante Jápones en guatemala">
    <meta name="keywords" content="Comida japonesa, guatemala, postres japoneses">
    <meta name="author" content="Sakura Dreams">
    <meta property="og:title" content="Sakura Dreams">
    <meta property="og:description" content="Menu de comida japonesa en guatemala">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../imagenes/logo_SakuraDreams.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Sawarabi+Mincho&display=swap" rel="stylesheet">
</head>
<body style="background-color: #fbd5e5;">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark mi-fondo">
        <div class="container-fluid">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="../../imagenes/logo_SakuraDreams.ico" alt="" width="40" class="d-inline-block align-text-top">
                    SAKURA DREAMS
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <?php 
                        $elementosHeader = [
                            ["directorio" => "../../index.php", "Nombre" => "Inicio", "clase"=> "nav-link"],
                            ["directorio" =>"../../Platillos/menu.php", "Nombre" => "Menú", "clase"=> "nav-link"],
                            ["directorio" =>"../../InfoPersonal/personalSakura.php", "Nombre" => "Nuestro Equipo", "clase"=> "nav-link active"],
                            ["directorio" =>"../../recetasPlatillos/recetas.php", "Nombre" => "Nuestras Recetas", "clase"=> "nav-link"],
                            ["directorio" =>"../../Resenias/resenias.php", "Nombre" => "Reseñas", "clase"=> "nav-link"],
                            ["directorio" =>"../../Reservaciones/index.php", "Nombre" => "Reservaciones", "clase"=> "nav-link"]
                        ];
                        foreach($elementosHeader as $elemento){
                            echo '<li class="nav-item">';
                            echo '<a class="' . $elemento["clase"] . '" href="' . $elemento["directorio"] . '">' . $elemento["Nombre"] . '</a>';
                            echo '</li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <h1>Sakura Dreams - Cocinero Secundario 1</h1>
    <div class="container recipe-container">
        <div class="fixed-left">
            <img src="../../imagenes/personal_sousChef.jpg" class="recipe-image" alt="Cocinero Secundario 1">
            <p class="recipe-description">Gestiona la sección de repostería y postres, asegurando un acabado perfecto para cada comida.</p>
        </div>
            <div class="steps-container">
                <div class="row ingredients">
                    <div class="col-12">
                        <h4 class="recipe-title">Nombre:</h4>
                        <ul>
                            <li class="ingredient-item">Emiko Sato </li>
                        </ul>
                        <h4 class="recipe-title">Puesto:</h4>
                        <ul>
                            <li class="ingredient-item">Sous Chef (Pastelería y Postres) </li>
                        </ul>
                        <h4 class="recipe-title">Biografía:</h4>
                        <ul>
                            <li class="ingredient-item">Emiko Sato es la fuerza creativa detrás de los exquisitos postres de Sakura Dreams. Emiko, graduada de Le Cordon Bleu en Tokio, combina sabores tradicionales japoneses con técnicas modernas para crear dulces inolvidables como el tiramisú de matcha y los macarons de sakura. Su viaje comenzó en la cocina de su abuela, donde aprendió el arte del wagashi (dulces japoneses). Emiko también es una defensora de la sostenibilidad y utiliza ingredientes locales y orgánicos siempre que es posible. En su tiempo libre le gusta pintar y hacer senderismo.</li>
                        </ul>
                    </div>
                </div>
            </div>    
        </div>
    </div>
    <footer class="footer">
        <p>&copy; 2025 Sakura Dreams.</p>
    </footer>
</body>    
</html>