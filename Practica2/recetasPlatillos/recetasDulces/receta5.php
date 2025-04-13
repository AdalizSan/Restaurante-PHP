<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sakura Dreams - Anmitsu clásico</title>
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
    <h1>Sakura Dreams - Anmitsu clásico</h1>
    <div class="container recipe-container">
        <div class="fixed-left">
            <img src="../../imagenes/postre_Anmitsu.jpg" class="recipe-image" alt="Anmitsu clásico">
            <p class="recipe-description">Un refrescante postre japonés con gelatina de agar, pasta de frijoles rojos, fruta y almíbar de azúcar negra.</p>
        </div>
            <div class="steps-container">
                <div class="row ingredients">
                    <div class="col-12">
                    <h4 class="recipe-title">Ingredientes Jalea de agar: </h4>
                    <ul>
                        <li class="ingredient-item">4 g de agar en polvo (o 1 tira de agar)</li>
                        <li class="ingredient-item">2 tazas de agua </li>
                        <li class="ingredient-item">2 cucharadas de azúcar</li>
                    </ul>
                    </div>
                </div>
            <div class="row ingredients">
                <div class="col-12">
                    <h4 class="recipe-title">Ingredientes:</h4>
                    <ul>
                        <?php 
                            $listaIngredientes = [
                                ["descripcion" => "½ taza de pasta de frijoles rojos dulces (anko)"],
                                ["descripcion" => "1 taza de frutas frescas variadas (por ejemplo, fresas, kiwi, naranjas o melón)"],
                                ["descripcion" => "4 trozos pequeños de mochi"],
                                ["descripcion" => "2 cucharadas de almíbar de azúcar negra (kuromitsu)"],
                                ["descripcion" => "Opcional: helado de vainilla o nata montada"]
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
                                ["descripcion" =>"En una cacerola, combine el agar en polvo, el agua y el azúcar. Llevar a ebullición mientras revuelve hasta que el agar se disuelva."],
                                ["descripcion" =>"Vierte la mezcla en un plato poco profundo y déjala enfriar a temperatura ambiente. Una vez cuajado, refrigere durante 1-2 horas hasta que esté firme."],
                                ["descripcion" =>"Corta la gelatina en cubos pequeños."],
                                ["descripcion" =>"Corta la fruta fresca en trozos pequeños."],
                                ["descripcion" =>"Si usa mochi comprado en la tienda, córtelo en trozos pequeños."],
                                ["descripcion" =>"En un recipiente para servir, coloque un puñado de cubitos de gelatina de agar."],
                                ["descripcion" =>"Agrega una cucharada de pasta dulce de frijoles rojos (anko) a un lado del tazón."],
                                ["descripcion" =>"Coloca la fruta fresca y los trozos de mochi alrededor de la gelatina."],
                                ["descripcion" =>"Rocíe jarabe de azúcar negro (kuromitsu) por encima."],
                                ["descripcion" =>"Para darle un toque extra, agregue una bola de helado de vainilla o una cucharada de crema batida."]
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