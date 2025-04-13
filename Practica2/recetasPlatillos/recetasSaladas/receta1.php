<?php
$datos = file('../../datos/recetaSalada1.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$imagen = $datos[0];
$descripcion = $datos[1];
$ingredientes = array_slice($datos, 2, 6);
$rellenos = array_slice($datos, 8, 4);
$pasos = array_slice($datos, 12);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sakura Dreams</title>
    <meta charset="UTF-8">
    <meta name="description" content="Restaurante Japonés en Guatemala">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../imagenes/logo_SakuraDreams.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../../styles.css">
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
                                ["directorio" =>"../../Platillos/menu.html", "Nombre" => "Menú", "clase"=> "nav-link"],
                                ["directorio" =>"../../InfoPersonal/personalSakura.html", "Nombre" => "Nuestro Equipo", "clase"=> "nav-link"],
                                ["directorio" =>"../../recetasPlatillos/recetas.html", "Nombre" => "Nuestras Recetas", "clase"=> "nav-link active"],
                                ["directorio" =>"../../Resenias/resenias.html", "Nombre" => "Reseñas", "clase"=> "nav-link"],
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

    <div class="container recipe-container mt-5 pt-5">
        <div class="fixed-left">
            <img src="../../imagenes/<?php echo $imagen; ?>" class="recipe-image" alt="Imagen del platillo">
            <p class="recipe-description"><?php echo $descripcion; ?></p>
        </div>
        <div class="steps-container">
            <div class="row ingredients">
                <div class="col-12">
                    <h4 class="recipe-title">Ingredientes:</h4>
                    <ul>
                        <?php foreach ($ingredientes as $item): ?>
                            <li class="ingredient-item"><?php echo $item; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="row ingredients">
                <div class="col-12">
                    <h4 class="recipe-title">Rellenos:</h4>
                    <ul>
                        <?php foreach ($rellenos as $item): ?>
                            <li class="ingredient-item"><?php echo $item; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="row steps">
                <div class="col-12">
                    <h4 class="recipe-title">Pasos:</h4>
                    <ol>
                        <?php foreach ($pasos as $paso): ?>
                            <li class="step-item"><?php echo $paso; ?></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer text-center py-3">
        <p>&copy; 2025 Sakura Dreams.</p>
    </footer>
</body>
</html>
