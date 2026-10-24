<?php
$titulo = 'Inicio';
$pagina = 'inicio';

// Arreglos sencillos con datos directos
$insignia = [
    [
        'nombre' => 'Margarita Tradicional',
        'ingredientes' => 'Salsa pomodoro, mozzarella fresco, albahaca y aceite de oliva.',
        'precio' => '180.00',
        'imagen' => 'img/margarita.jpg'
    ],
    [
        'nombre' => 'Prosciutto di Parma',
        'ingredientes' => 'Mozzarella, jamón prosciutto curado, rúcula fresca y parmesano.',
        'precio' => '260.00',
        'imagen' => 'img/prosciutto.jpg'
    ],
    [
        'nombre' => 'Carnívora Suprema',
        'ingredientes' => 'Pepperoni, tocineta ahumada, carne molida artesanal y jamón.',
        'precio' => '270.00',
        'imagen' => 'img/carnivora.jpg'
    ]
];

$promos = [
    ['texto' => 'Martes 2x1 en pizzas medianas', 'badge' => '2x1', 'color' => 'danger'],
    ['texto' => 'Combo familiar + 2 bebidas gaseosas', 'badge' => 'Combo', 'color' => 'success'],
    ['texto' => 'Tiramisú gratis en compras mayores a L. 600', 'badge' => 'Gratis', 'color' => 'warning text-dark']
];

$testimonios = [
    ['nombre' => 'Carolina M.', 'texto' => 'La masa es igualita a la que probé en Italia. La Margarita es mi favorita.'],
    ['nombre' => 'José Luis R.', 'texto' => 'Pedimos la Carnívora para el cumpleaños de mi hijo y no sobró ni un pedazo.'],
    ['nombre' => 'Daniela P.', 'texto' => 'El tiramisú casero es lo mejor. El servicio siempre es rápido.']
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bella Napoli | Inicio</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --napoli-rojo: #b32121;
        }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #fcfbfa; }
        .bg-napoli { background-color: var(--napoli-rojo) !important; }
        .btn-napoli { background-color: var(--napoli-rojo); color: white; border: none; }
        .btn-napoli:hover { background-color: #901919; color: white; }
        .hero { background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('img/horno.jpg') center/cover no-repeat; color: white; padding: 100px 0; }
        .titulo-serif { font-family: 'Georgia', serif; font-weight: bold; }
        .seccion-titulo { border-bottom: 3px solid var(--napoli-rojo); display: inline-block; padding-bottom: 5px; margin-bottom: 30px; }
    </style>
</head>
<body>

<!-- Navbar Responsivo -->
<nav class="navbar navbar-expand-lg navbar-dark bg-napoli sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold fs-4" href="index.php">🍕 Bella Napoli</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active fw-bold" href="index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="menu.php">Menú y Precios</a></li>
                <li class="nav-item"><a class="nav-link" href="armar.php">Arma tu Pizza</a></li>
                <li class="nav-item"><a class="nav-link" href="pedido.php">Checkout / Pedido</a></li>
                <li class="nav-item"><a class="nav-link" href="sucursales.php">Sucursales y Órdenes</a></li>
            </ul>
        </div>
    </div>
</nav>

<header class="hero text-center">
    <div class="container">
        <h1 class="titulo-serif">Pizza al horno de leña,<br>como en Nápoles</h1>
        <p class="lead my-4">Masa artesanal, ingredientes frescos y más de 20 años de tradición.</p>
        <a href="pedido.php" class="btn btn-napoli btn-lg me-2">Ordenar ahora</a>
        <a href="menu.php" class="btn btn-outline-light btn-lg">Ver el menú</a>
    </div>
</header>

<main class="container mt-5">

    <section class="row align-items-center mb-5">
        <div class="col-md-6">
            <h2 class="titulo-serif seccion-titulo">Nuestra receta</h2>
            <p>En Bella Napoli seguimos la receta tradicional napolitana: una masa que reposa 48 horas, salsa de tomate preparada todos los días y mozzarella fresca.</p>
            <p>Cada pizza se hornea en horno de leña a más de 400 grados, por eso queda con la orilla crujiente y el centro suave. Todo se hace a mano, sin atajos.</p>
        </div>
        <div class="col-md-6">
            <img src="img/horno.jpg" class="img-fluid rounded shadow-sm" alt="Horno de leña de Bella Napoli">
        </div>
    </section>

    <section class="mb-5">
        <h2 class="titulo-serif seccion-titulo">Pizzas insignia del día</h2>
        <div class="row">
            <?php foreach ($insignia as $pizza): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="<?php echo $pizza['imagen']; ?>" class="card-img-top" alt="<?php echo $pizza['nombre']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $pizza['nombre']; ?></h5>
                            <p class="card-text small"><?php echo $pizza['ingredientes']; ?></p>
                            <p class="fw-bold mb-0">Desde L. <?php echo $pizza['precio']; ?></p>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <a href="menu.php" class="btn btn-sm btn-napoli w-100">Ver en el menú</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="mb-5">
        <h2 class="titulo-serif seccion-titulo">Promociones vigentes</h2>
        <ul class="list-group">
            <?php foreach ($promos as $promo): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $promo['texto']; ?>
                    <span class="badge bg-<?php echo $promo['color']; ?> rounded-pill"><?php echo $promo['badge']; ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section class="mb-5">
        <h2 class="titulo-serif seccion-titulo">Lo que dicen nuestros clientes</h2>
        <div class="row">
            <?php foreach ($testimonios as $t): ?>
                <div class="col-md-4 mb-3">
                    <div class="card p-3 h-100 shadow-sm border-0 bg-light">
                        <p class="mb-2 font-italic">&ldquo;<?php echo $t['texto']; ?>&rdquo;</p>
                        <p class="small text-muted fw-bold mb-0">- <?php echo $t['nombre']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

</main>

<footer class="bg-dark text-white text-center py-4 mt-5">
    <div class="container">
        <p class="mb-1 fw-bold">Pizzería Bella Napoli - Auténtica Tradición Italiana en Honduras</p>
        <p class="small text-muted mb-2">Horarios de cocina: Lunes a Domingo de 11:00 AM a 10:00 PM</p>
        <p class="small text-muted mb-0">&copy; <?php echo date('Y'); ?> Bella Napoli. Todos los derechos reservados.</p>
    </div>
</footer>

<!-- Bootstrap JS Bundle CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>