<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sakura Dreams</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Restaurante Jápones en guatemala">
        <meta name="keywords" content="Comida japonesa, guatemala, postres japoneses">
        <meta name="author" content="Sakura Dreams">
        <meta property="og:title" content="Sakura Dreams">
        <meta property="og:description" content="Menu de comida japonesa en guatemala">
        <link rel="icon" href="imagenes/logo_SakuraDreams.ico">
        
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="styles.css">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Sawarabi+Mincho&display=swap" rel="stylesheet">
    </head>
    <body style="background-color: #fbd5e5;">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark mi-fondo">
            <div class="container-fluid">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="imagenes/logo_SakuraDreams.ico" alt="" width="40" class="d-inline-block align-text-top">
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
                            ["directorio" => "#", "Nombre" => "Inicio", "clase"=> "nav-link active"],
                            ["directorio" =>"Platillos/menu.php", "Nombre" => "Menú", "clase"=> "nav-link"],
                            ["directorio" =>"InfoPersonal/personalSakura.php", "Nombre" => "Nuestro Equipo", "clase"=> "nav-link"],
                            ["directorio" =>"recetasPlatillos/recetas.php", "Nombre" => "Nuestras Recetas", "clase"=> "nav-link"],
                            ["directorio" =>"Resenias/resenias.php", "Nombre" => "Reseñas", "clase"=> "nav-link"],
                            ["directorio" =>"Reservaciones/index.php", "Nombre" => "Reservaciones", "clase"=> "nav-link"]
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
        <main>  
        <div class="container marketing">

            <h1> Sakura Dreams - Inicio</h1> 
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">Misión</h2>
                    <p class="lead">"En Sakura Dreams, nuestra misión es crear una experiencia gastronómica inolvidable que celebre el arte y la tradición de la cocina japonesa. Estamos comprometidos a utilizar los ingredientes más frescos y de mayor calidad para elaborar platos que honren el delicado equilibrio entre sabor, textura y presentación. A través de un servicio excepcional, una atmósfera cálida y acogedora y un profundo respeto por la cultura japonesa, pretendemos transportar a nuestros huéspedes a un mundo de maravillas culinarias y serenidad". </p>
                </div>
                <div class="col-md-5">
                    <img src="imagenes/imagen_restaurante_1.jpg" alt="Imagen 1 Restaurante Sakura Dreams" style="width: 300px; height: 400px;">
                </div>
                </div>
            
                <hr class="featurette-divider">
            
                <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1">Visión</h2>
                    <p class="lead">"Nuestra visión es convertirnos en un faro de excelencia culinaria japonesa, donde cada comida sea un viaje a través de las estaciones y tradiciones de Japón. Aspiramos a inspirar una apreciación más profunda de la cultura japonesa, no sólo a través de nuestra comida sino también a través de la armonía y la belleza de nuestro ambiente gastronómico. Sakura Dreams será un lugar donde los huéspedes podrán escapar de lo común y disfrutar de una experiencia de ensueño que nutre el alma tanto como el paladar". </p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="imagenes/imagen_restaurante_3.jpg" alt="Imagen 2 Restaurante Sakura Dreams" style="width: 300px; height: 400px;">
                </div>
                </div>
            
                <hr class="featurette-divider">            
                <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">Valores Fundamentales</h2>
                    <ul class="lead">
                    <li>Autenticidad: Mantenerse fiel a las tradiciones y técnicas de la cocina japonesa. </li>
                    <li>Excelencia: Ofrecer la más alta calidad en comida, servicio y ambiente. </li>
                    <li>Armonía: Crear una experiencia gastronómica equilibrada y serena.</li> 
                    <li>Innovación: Incorporar giros modernos respetando la tradición.</li> 
                    <li>Hospitalidad: Tratar a cada cliente con calidez y respeto (omotenashi).</li> 
                    </ul>
                </div>
                <div class="col-md-5">
                    <img src="imagenes/imagen_restaurante_4.jpg" alt="Imagen 3 Restaurante Sakura Dreams" style="width: 300px; height: 400px;">
                </div>
                </div>            
                <hr class="featurette-divider">
            </div>
            <footer class="footer">
                <p>&copy; 2025 Sakura Dreams.</p>
            </footer>
    </body>
</html>
        