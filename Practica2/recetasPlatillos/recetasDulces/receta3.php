<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sakura Dreams - Sakura Macarons</title>
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
    <div class="container recipe-container">
        <div class="fixed-left">
            <img src="../../imagenes/postre_SakuraMacarons.jpg "class="recipe-image" alt="Sakura Macarons">
            <p class="recipe-description"> Macarons con sabor a flor de cerezo y ganache de chocolate blanco.</p>
        </div>
            <div class="steps-container">
                <div class="row ingredients">
                    <div class="col-12">
                    <h4 class="recipe-title">Ingredientes Conchas de macarrón:</h4>
                    <ul>
                    <?php 
                            $listaIngredientes = [
                                ["descripcion" => "100 g de harina de almendras"],
                                ["descripcion" => "100 g de azúcar en polvo"],
                                ["descripcion" => "80 g de claras de huevo (temperatura ambiente)"],
                                ["descripcion" => "70 g de azúcar granulada"],
                                ["descripcion" => "colorante alimentario rosa"],
                                ["descripcion" => "1 cucharadita de extracto de sakura (flor de cerezo)"],
                                ["descripcion" => "Ganache de chocolate blanco:"],
                                ["descripcion" => "100 gramos de chocolate blanco"],
                                ["descripcion" => "50 ml de nata espesa"],
                                ["descripcion" => "1 cucharadita de extracto de sakura"]
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
                                ["descripcion" =>"Tamizar juntos la harina de almendras y el azúcar glass."],
                                ["descripcion" =>"En un recipiente aparte, bata las claras de huevo hasta que estén espumosas y luego agregue gradualmente la azúcar granulada. Batir hasta que se formen picos rígidos."],
                                ["descripcion" =>"Incorpora suavemente los ingredientes secos al merengue, agregando colorante rosa y extracto de sakura."],
                                ["descripcion" =>"Coloque pequeños círculos en una bandeja para hornear forrada con papel pergamino."],
                                ["descripcion" =>"Deje reposar las cáscaras durante 30 minutos para que se forme una piel."],
                                ["descripcion" =>"Hornee a 150°C (300°F) durante 15-18 minutos. Dejar enfriar."],
                                ["descripcion" =>"Para la ganache, calentar la nata y verter sobre el chocolate blanco picado. Revuelva hasta que quede suave y luego agregue el extracto de sakura. Deja que espese."],
                                ["descripcion" =>"Coloque ganache sobre una base de macarrón y emparéjela con otra."]
                            ];
                            foreach ($listaPasos as $paso){
                                echo'<li class="step-item">'.$paso["descripcion"].'</li>';
                            }
                        ?>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <p>&copy; 2025 Sakura Dreams.</p>
    </footer>
</body>    
</html>