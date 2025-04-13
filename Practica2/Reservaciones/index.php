<?php
class Reserva {
    public $nombre;
    public $telefono;
    public $fecha;
    public $hora;
    public $descripcion;

    public function __construct($nombre, $telefono, $fecha, $hora, $descripcion) {
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->descripcion = $descripcion;
    }

    public function guardar() {
        $linea = "$this->nombre|$this->telefono|$this->fecha|$this->hora|$this->descripcion\n";
        file_put_contents('reservaciones.txt', $linea, FILE_APPEND);
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $reserva = new Reserva(
        $_POST['nombre'],
        $_POST['telefono'],
        $_POST['fecha'],
        $_POST['hora'],
        $_POST['descripcion'] ?? ''
    );
    $reserva->guardar();
}

function mostrarReservaciones() {
    if (!file_exists('reservaciones.txt')) return;
    $lineas = file('reservaciones.txt');
    foreach ($lineas as $linea) {
        list($nombre, $telefono, $fecha, $hora, $descripcion) = explode('|', trim($linea));
        echo "<div class='card mb-2 p-2'><strong>$nombre</strong><br>Tel: $telefono<br>Fecha: $fecha<br>Hora: $hora<br>Descripción: $descripcion</div>";
    }
}
?>

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
                    <?php 
                        $elementosHeader = [
                            ["directorio" => "../index.php", "Nombre" => "Inicio", "clase"=> "nav-link"],
                            ["directorio" =>"../Platillos/menu.php", "Nombre" => "Menú", "clase"=> "nav-link"],
                            ["directorio" =>"../InfoPersonal/personalSakura.php", "Nombre" => "Nuestro Equipo", "clase"=> "nav-link"],
                            ["directorio" =>"../recetasPlatillos/recetas.php", "Nombre" => "Nuestras Recetas", "clase"=> "nav-link"],
                            ["directorio" =>"../Resenias/resenias.php", "Nombre" => "Reseñas", "clase"=> "nav-link"],
                            ["directorio" =>"../Reservaciones/index.php", "Nombre" => "Reservaciones", "clase"=> "nav-link active"]
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

    <main class="container mt-5 pt-5">
        <h2 class="text-center">Reservaciones</h2>
        <form method="POST" class="mb-5">
            <div class="mb-3">
                <label class="form-label">Nombre del cliente</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Teléfono</label>
                <input type="text" name="telefono" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de reserva</label>
                <input type="text" name="fecha" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Hora de reserva</label>
                <input type="text" name="hora" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Reservar</button>
        </form>

        <h2>Reservaciones registradas</h2>
        <?php mostrarReservaciones(); ?>
    </main>

    <footer class="footer text-center mt-5">
        <p>&copy; 2025 Sakura Dreams.</p>
    </footer>
</body>
</html>