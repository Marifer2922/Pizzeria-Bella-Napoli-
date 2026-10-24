<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio | Pizzería Bella Napoli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #fbf6ea; }
        .navbar { background-color: #9c2b23; }
        .hero {
            background-color: #5b2b1b;
            background-image: linear-gradient(rgba(0,0,0,.55), rgba(0,0,0,.55)), url('img/hero.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
        }
        .btn-ordenar { background-color: #9c2b23; color: white; }
        .btn-ordenar:hover { background-color: #7d1f19; color: white; }
        .card-img-top { height: 200px; object-fit: cover; }
        .titulo { border-bottom: 3px solid #3f6b3a; display: inline-block; padding-bottom: 4px; margin-bottom: 20px; }
    </style>
</head>
<body>

   
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Bella Napoli</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="menu.php">Menú</a></li>
                    <li class="nav-item"><a class="nav-link" href="arma-pizza.php">Arma tu pizza</a></li>
                    <li class="nav-item"><a class="nav-link" href="pedido.php">Pedido</a></li>
                    <li class="nav-item"><a class="nav-link" href="sucursales.php">Sucursales</a></li>
                </ul>
            </div>
        </div>
    </nav>

    
    <header class="hero text-center">
        <div class="container">
            <h1 class="display-4">Pizzería Bella Napoli</h1>
            <p class="lead my-3">Pizzas tradicionales al horno de leña, hechas a mano todos los días.</p>
            <a href="pedido.php" class="btn btn-ordenar btn-lg">Ordena ahora</a>
        </div>
    </header>

    <main class="container mt-5">

        <section class="row align-items-center mb-5">
            <div class="col-md-6">
                <h2 class="titulo">Nuestra receta</h2>
                <p>En Bella Napoli hacemos las pizzas como se hacen en Nápoles. La masa se prepara
                   con un día de anticipación para que quede suave por dentro y crujiente en la orilla.</p>
                <p>Usamos salsa de tomate natural, mozzarella fresca e ingredientes que compramos
                   cada semana. Todas se hornean en nuestro horno de leña.</p>
            </div>
            <div class="col-md-6">
                <img src="img/horno.jpg" class="img-fluid rounded" alt="Horno de leña">
            </div>
        </section>

       
        <section class="mb-5">
            <h2 class="titulo">Pizzas insignia del día</h2>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <img src="img/margarita.jpg" class="card-img-top" alt="Pizza Margarita">
                        <div class="card-body">
                            <h5 class="card-title">Margarita</h5>
                            <p class="card-text">Salsa pomodoro, mozzarella fresca y albahaca.</p>
                            <p class="fw-bold mb-0">Desde L. 110.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <img src="img/prosciutto.jpg" class="card-img-top" alt="Pizza Prosciutto di Parma">
                        <div class="card-body">
                            <h5 class="card-title">Prosciutto di Parma</h5>
                            <p class="card-text">Prosciutto, rúcula, parmesano y aceite de oliva.</p>
                            <p class="fw-bold mb-0">Desde L. 165.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <img src="img/carnivora.jpg" class="card-img-top" alt="Pizza Carnívora Suprema">
                        <div class="card-body">
                            <h5 class="card-title">Carnívora Suprema</h5>
                            <p class="card-text">Pepperoni, jamón, tocineta, carne molida y chorizo.</p>
                            <p class="fw-bold mb-0">Desde L. 170.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       
        <section class="mb-5">
            <h2 class="titulo">Promociones</h2>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Martes de 2x1 en pizzas medianas
                    <span class="badge bg-danger">2x1</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pizza familiar con 2 gaseosas
                    <span class="badge bg-success">Combo</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    10% de descuento si pides 3 o más pizzas
                    <span class="badge bg-warning text-dark">-10%</span>
                </li>
            </ul>
        </section>

        
        <section class="mb-5">
            <h2 class="titulo">Lo que dicen nuestros clientes</h2>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card h-100 p-3">
                        <p>"El sabor es muy bueno y llega bien calientita."</p>
                        <small class="text-muted">- Carolina Mendez.</small>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card h-100 p-3">
                        <p>"Pedimos la Carnívora para un cumpleaños y todos quedaron felices."</p>
                        <small class="text-muted">- José Luis.</small>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card h-100 p-3">
                        <p>"Sus empleados son muy amables. Siempre atienden rápido."</p>
                        <small class="text-muted">- Daniela Pineda.</small>
                    </div>
                </div>
            </div>
        </section>

    </main>


    <footer class="bg-dark text-light pt-4 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5>Bella Napoli</h5>
                    <p class="small">Pizzas al horno de leña.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h6>Horarios de cocina</h6>
                    <p class="small">Lunes a jueves: 11:00 a.m. - 9:00 p.m.<br>
                       Viernes y sábado: 11:00 a.m. - 11:00 p.m.<br>
                       Domingo: 12:00 m. - 8:00 p.m.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h6>Redes sociales</h6>
                    <p class="small">Facebook: Bella Napoli HN<br>
                       Instagram: @bellanapoli.hn</p>
                </div>
            </div>
            <hr>
            <p class="text-center small mb-0">&copy; <?php echo date("Y"); ?> Pizzería Bella Napoli. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>