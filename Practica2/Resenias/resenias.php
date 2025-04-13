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
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Platillos/menu.html">Menú</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../InfoPersonal/personalSakura.html">Nuestro Equipo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../recetasPlatillos/recetas.html">Nuestras Recetas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Reseñas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container my-5">
        <div class="row">
            <?php 
                $listaResenias = [
                    ["nombre"=>"Emily T. – 5/5" , "comentario"=> "¡Sakura Dreams es una auténtica joya! El ambiente es sereno, con suaves decoraciones en flor de cerezo y música relajante. El sushi era fresco y muy bien presentado, y la sopa de miso era la mejor que he probado. ¡Una visita obligada para cualquiera que ame la auténtica cocina japonesa!", "estrellas"=> "⭐⭐⭐⭐⭐"],
                    ["nombre"=>"James L. – 4/5" , "comentario"=> "¡Excelente experiencia en general! La tempura era ligera y crujiente, y el caldo de ramen era rico y sabroso. El servicio fue atento, aunque la espera por nuestra comida fue un poco más larga de lo esperado. Aún así, ¡definitivamente regresaría!", "estrellas"=> "⭐⭐⭐⭐"],
                    ["nombre"=>"Priya S. – 5/5" , "comentario"=> "¡Una experiencia gastronómica inolvidable! El plato de teppanyaki estaba increíblemente fresco y el pastel de queso matcha fue la manera perfecta de terminar la comida. El personal fue muy amable e incluso nos enseñó algunas frases japonesas. ¡Lo recomiendo encarecidamente!", "estrellas"=> "⭐⭐⭐⭐⭐"],
                    ["nombre"=>"Michael R. – 3/5" , "comentario"=> "La comida es decente, pero un poco cara para el tamaño de las porciones. El bowl de ramen estaba delicioso, pero me fui con un poco de hambre. Sin embargo, el ambiente es encantador y la selección de sake es impresionante", "estrellas"=> "⭐⭐⭐"],
                    ["nombre"=>"Sara K. – 5/5" , "comentario"=> "¡Sakura Dreams se siente como un pedacito de Japón! Las cajas bento están bellamente dispuestas y el salmón teppanyaki se cocinó a la perfección. La experiencia de la ceremonia del té fue un toque único. ¡Volveremos pronto!", "estrellas"=> "⭐⭐⭐⭐⭐"],
                    ["nombre"=>"David M. – 4/5" , "comentario"=> "Restaurante japonés sólido con un ambiente acogedor. La tempura de verduras estaba deliciosa. El único inconveniente era que los asientos eran limitados, ¡así que haga su reserva con anticipación!", "estrellas"=> "⭐⭐⭐⭐"],
                    ["nombre"=>"Linda P. – 5/5" , "comentario"=> "¡Me encantó! Las opciones veganas fueron fantásticas: la tempura de verduras y el tofu donburi eran muy sabrosos. El personal fue muy servicial y el tema de los cerezos en flor hizo que la velada fuera mágica", "estrellas"=> "⭐⭐⭐⭐⭐"],
                    ["nombre"=>"Carlos G. – 3.5/5" , "comentario"=> "Buena comida, pero no excepcional. El ramen era decente, aunque el caldo carecía de profundidad. Los rollos de sushi eran creativos, pero algunos parecían demasiado complicados. Aún así, un buen lugar para una cena informal", "estrellas"=> "⭐⭐⭐½"],
                    ["nombre"=>"Anna W. – 5/5" , "comentario"=> "¡Sakura Dreams superó todas mis expectativas! La experiencia omakase valió cada centavo: las selecciones del chef fueron divinas. El ambiente es muy tranquilo y el personal nos hizo sentir como invitados de honor. ¡No puedo esperar a volver!", "estrellas"=> "⭐⭐⭐⭐⭐"],
                    ["nombre"=>"Brian H. – 4.5/5" , "comentario"=> "¡Un restaurante fantástico con un gran ambiente! La carne wagyu estaba deliciosa y el maridaje de sake fue perfecto. El único problema menor fue el nivel de ruido cuando el restaurante se llenaba. De lo contrario, ¡una experiencia de primera!", "estrellas"=> "⭐⭐⭐⭐½"],
                ]
                foreach ($listaResenias as $resenia){
                    echo '<div class="col-md-4">';
                        echo'<div class="card review-card">';
                            echo'<div class="card-body">';
                                echo'<h5 class="review-title">'. $resenia["nombre"]'';
                                echo'<p class="review-content">'. $resenia["comentario"]'</p>';
                                echo'<div class="star-rating">'. $resenia["estrellas"]'</div>';
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