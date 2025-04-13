<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sakura Dreams - Personal</title>
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
                            ["directorio" =>"../InfoPersonal/personalSakura.php", "Nombre" => "Nuestro Equipo", "clase"=> "nav-link active"],
                            ["directorio" =>"../recetasPlatillos/recetas.php", "Nombre" => "Nuestras Recetas", "clase"=> "nav-link"],
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
    <h1> Sakura Dreams - Personal</h1> 
    <div class="container my-5">
        <div class="row">
            <?php 
                $listaPersonal = [
                    ["linkImagen"=>"../imagenes/personal_chef ejectivo.jpg","nombreIma"=>"Imagen de chef ejectivo","titulo"=>"Chef Principal","descripcion"=>"Supervisa toda la cocina, el desarrollo del menú y el control de calidad.","nombre"=>"Hiroshi Takahashi","puesto"=>"Chef Ejecutivo","link"=>"personal/person1.php"],
                    ["linkImagen"=>"../imagenes/personal_sousChef.jpg","nombreIma"=>"Imagen de Cocinero Secundario 1","titulo"=>"Cocinero Secundario 1","descripcion"=>"Gestiona la sección de repostería y postres, asegurando un acabado perfecto para cada comida.","nombre"=>"Emiko Sato","puesto"=>"Sous Chef (Pastelería y Postres)","link"=>"personal/person2.php"],
                    ["linkImagen"=>"../imagenes/personal_jefeSushi.jpg","nombreIma"=>"Chef secundario 2","titulo"=>"Chef secundario 2","descripcion"=>"Lidera el equipo de sushi y garantiza los más altos estándares de preparación de sushi.","nombre"=>"Kenji Nakamura","puesto"=>"Jefe de cocina de sushi","link"=>"personal/person3.php"],
                    ["linkImagen"=>"../imagenes/personal_especialistaTeppanyaki.jpg","nombreIma"=>"Imagen de Chef secundario 3","titulo"=>"Chef secundario 3","descripcion"=>"Se encarga de teppanyaki y platos a la parrilla, brindando una experiencia gastronómica interactiva.","nombre"=>"Akira Tanaka","puesto"=>"Especialista en Teppanyaki y Grill","link"=>"personal/person4.php"],
                    ["linkImagen"=>"../imagenes/personal_ChefRamenFideos.jpg","nombreIma"=>"Imagen de Chef Secundario 4","titulo"=>"Chef Secundario 4","descripcion"=>"Se centra en platos de ramen, udon y soba, brindando comodidad en cada plato.","nombre"=>"Yuki Matsuda","puesto"=>"Chef de ramen y fideos","link"=>"personal/person5.php"],
                ];
                foreach ($listaPersonal as $infoPerso){
                    echo'<div class="col-md-4 mb-4">';
                        echo'<div class="card">';
                            echo'<img src="'. $infoPerso["linkImagen"].'" class="card-img-top" alt="'. $infoPerso["nombreIma"].'">';
                            echo'<div class="card-body">';
                                echo'<h5 class="card-title recipe-title">'.$infoPerso["titulo"].'</h5>';
                                echo'<p class="card-text">'.$infoPerso["descripcion"].'</p>';
                                echo'<ul>';
                                    echo'<li><b>Nombre: </b>'.$infoPerso["nombre"].'</li>';
                                    echo'<li><b>Puesto: </b>'.$infoPerso["puesto"].'</li>';
                                echo'</ul>';
                                echo'<a href="'.$infoPerso["link"].'" class="btn btn-color">Ver más...</a>';
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

