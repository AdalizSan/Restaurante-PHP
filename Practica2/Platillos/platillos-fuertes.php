<?php
$recetas = file('../datos/recetas-saladas.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Sakura Dreams - Platillos Fuertes</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Restaurante Jápones en Guatemala">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Sakura Dreams">
    <meta property="og:description" content="Menú de comida japonesa en Guatemala">
    <link rel="icon" href="../imagenes/logo_SakuraDreams.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Sawarabi+Mincho&display=swap" rel="stylesheet">
</head>
<body style="background-color: #fbd5e5;">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark mi-fondo">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../imagenes/logo_SakuraDreams.ico" alt="" width="40" class="d-inline-block align-text-top">
                SAKURA DREAMS
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <?php 
                        $elementosHeader = [
                            ["directorio" => "../index.html", "Nombre" => "Inicio", "clase"=> "nav-link"],
                            ["directorio" =>"#", "Nombre" => "Menú", "clase"=> "nav-link active"],
                            ["directorio" =>"../InfoPersonal/personalSakura.html", "Nombre" => "Nuestro Equipo", "clase"=> "nav-link"],
                            ["directorio" =>"../recetasPlatillos/recetas.html", "Nombre" => "Nuestras Recetas", "clase"=> "nav-link"],
                            ["directorio" =>"../Resenias/resenias.html", "Nombre" => "Reseñas", "clase"=> "nav-link"],
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

    <h1 class="text-center mt-5 pt-5">Sakura Dreams - Platillos Fuertes</h1>

    <div class="container my-5">
        <div class="row">
            <?php foreach ($recetas as $linea): 
                list($titulo, $imagen, $descripcion, $precio, $enlace) = explode('|', $linea);
            ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="../imagenes/<?php echo trim($imagen); ?>" class="card-img-top" alt="Imagen de <?php echo htmlspecialchars($titulo); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($titulo); ?></h5>
                        <p class="card-text"><?php echo htmlspecialchars($descripcion); ?></p>
                        <ul><li><b>Precio:</b> <?php echo htmlspecialchars($precio); ?></li></ul>
                        <a href="<?php echo htmlspecialchars($enlace); ?>" class="btn btn-color">Ver receta</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <footer class="footer text-center py-3">
        <p>&copy; 2025 Sakura Dreams.</p>
    </footer>
</body>
</html>
