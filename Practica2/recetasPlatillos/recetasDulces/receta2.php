<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sakura Dreams - Taiyaki clásico</title>
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
                            ["directorio" =>"../../InfoPersonal/personalSakura.php", "Nombre" => "Nuestro Equipo", "clase"=> "nav-link"],
                            ["directorio" =>"../../recetasPlatillos/recetas.php", "Nombre" => "Nuestras Recetas", "clase"=> "nav-link active"],
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
    <h1>Sakura Dreams - Taiyaki clásico</h1>
    <div class="container recipe-container">
        <div class="fixed-left">
            <img src="../../imagenes/postre_Taiyaki.jpg" class="recipe-image" alt="Taiyaki clásico">
            <p class="recipe-description">Pasteles con forma de pez rellenos de pasta dulce de judías rojas o natillas.</p>
        </div>
            <div class="steps-container">
                <div class="row ingredients">
                    <div class="col-12">
                    <h4 class="recipe-title">Ingredientes:</h4>
                    <ul>
                        <?php 
                            $listaIngredientes = [
                                ["descripcion" => "150 g de harina para todo uso"],
                                ["descripcion" => "1 cucharadita de polvo para hornear"],
                                ["descripcion" => "1 cucharada de azúcar"],
                                ["descripcion" => "1 huevo grande"],
                                ["descripcion" => "200ml de leche"],
                                ["descripcion" => "1 cucharada de mantequilla derretida"],
                                ["descripcion" => "200 g de pasta de judías rojas dulces (anko) o natillas"],
                                ["descripcion" => "Molde taiyaki (o molde para tortitas)"]
                            ];
                            foreach ($listaIngredientes as $ingrediente){
                                echo'<li class="ingredient-item">'.$ingrediente["descripcion"].'</li>';
                            }
                        ?>
                    </ul>
                    </div>
                </div>
            <div class="row steps">
                <div class="col-12">
                    <h4 class="recipe-title">Pasos:</h4>
                    <ol>
                        <?php 
                            $listaPasos = [
                                ["descripcion" =>"En un bol, mezcle la harina, el polvo para hornear y el azúcar."],
                                ["descripcion" =>"En otro bol, mezcle el huevo, la leche y la mantequilla derretida."],
                                ["descripcion" =>"Combine los ingredientes húmedos y secos para formar una masa suave."],
                                ["descripcion" =>"Calentar el molde taiyaki y engrasarlo ligeramente"],
                                ["descripcion" =>"Vierte una pequeña cantidad de masa en el molde y luego agrega una cucharada de relleno."],
                                ["descripcion" =>"Cubre el relleno con más masa y cierra el molde."],
                                ["descripcion" =>"Cocine durante 2-3 minutos por cada lado hasta que estén dorados."],
                                ["descripcion" =>"Retirar del molde y servir caliente."]
                            ];
                            foreach ($listaPasos as $paso){
                                echo'<li class="step-item">'.$paso["descripcion"].'</li>';
                            }
                        ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <p>&copy; 2025 Sakura Dreams.</p>
    </footer>
</body>    
</html>