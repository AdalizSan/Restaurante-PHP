<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sakura Dreams - Recetas</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Restaurante Jápones en guatemala">
    <meta name="keywords" content="Comida japonesa, guatemala, postres japoneses">
    <meta name="author" content="Sakura Dreams">
    <meta property="og:title" content="Sakura Dreams">
    <meta property="og:description" content="Menu de comida japonesa en guatemala">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../imagenes/logo_SakuraDreams.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Sawarabi+Mincho&display=swap" rel="stylesheet">
</head>
<body style="background-color: #fbd5e5;">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark mi-fondo">
        <div class="container-fluid">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="../imagenes/logo_SakuraDreams.ico" alt="" width="40" class="d-inline-block align-text-top">
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
                            ["directorio" => "../index.php", "Nombre" => "Inicio", "clase"=> "nav-link"],
                            ["directorio" =>"../Platillos/menu.php", "Nombre" => "Menú", "clase"=> "nav-link"],
                            ["directorio" =>"../InfoPersonal/personalSakura.php", "Nombre" => "Nuestro Equipo", "clase"=> "nav-link"],
                            ["directorio" =>"../recetasPlatillos/recetas.php", "Nombre" => "Nuestras Recetas", "clase"=> "nav-link active"],
                            ["directorio" =>"../Resenias/resenias.php", "Nombre" => "Reseñas", "clase"=> "nav-link"],
                            ["directorio" =>"../Reservaciones/index.php", "Nombre" => "Reservaciones", "clase"=> "nav-link"]
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
    <div class="container space-between-header-cards">
        <div class="row justify-content-center">
            <?php 
                $cards = [
                    ["nombre"=> "Recetas - Platillos Fuertes","descripcion"=> "Todos nuestras recetas de los platillos fuertes disponibles de Sakura Dreams.","link"=> "recetasSaladas.php","nombreLink"=>"Ir al recetario","imagen"=>"../imagenes/imagenResetario_platillosFuertes.jpg","nombreIma"=>"Imagen Platillos Fuertes:)"],
                    ["nombre"=> "Recetas - Postres","descripcion"=> "Todos nuestras recetas de los postres disponibles de Sakura Dreams.","link"=> "recetasDulces.php","nombreLink"=>"Ir al recetario","imagen"=>"../imagenes/imagenResetario_postres.jpg","nombreIma"=>"Imagen Postres"]
                ];
                foreach ($cards as $card){
                    echo'<div class="col-md-4">';
                        echo'<div class="card">';
                            echo'<img src="'. $card["imagen"].'" class="card-img-top" alt="'. $card["nombreIma"].'">';
                            echo'<div class="card-body">';
                                echo'<h5 class="card-title">'. $card["nombre"].'</h5>';
                                echo'<p class="card-text">'. $card["descripcion"].'</p>';
                                echo'<a href="'. $card["link"].'" class="btn btn-color">'. $card["nombreLink"].'</a>';
                            echo'</div>';
                        echo'</div>';
                    echo'</div>';
                }
            ?>
        </div>
    </div>
    <footer class="footer">
        <p>&copy; 2025 Sakura Dreams.</p>
    </footer>
</body>
</html>
