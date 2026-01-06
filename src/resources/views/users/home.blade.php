<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Blog Personal | Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        .hero-section {
            background: linear-gradient(135deg, #ffffff 0%, #e9ecef 100%);
            padding: 100px 0;
        }
        .card {
            border: none;
            transition: transform 0.3s;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .btn-primary {
            background-color: #0d6efd;
            border: none;
        }
        footer {
            background-color: #ffffff;
            border-top: 1px solid #dee2e6;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">BLOG<span class="text-primary">TECH</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#articulos">Artículos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-section text-center">
        <div class="container">
            <h1 class="display-3 fw-bold">Bienvenido a mi Blog</h1>
            <p class="lead text-muted">Ideas, tutoriales y reflexiones sobre tecnología y diseño.</p>
            <a href="#articulos" class="btn btn-primary btn-lg px-4">Leer artículos</a>
        </div>
    </header>

    <main class="container my-5" id="articulos">
        <h2 class="mb-4">Últimas entradas</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Tech 1">
                    <div class="card-body">
                        <h5 class="card-title">El futuro del Desarrollo Web</h5>
                        <p class="card-text text-muted">Exploramos las nuevas tendencias para el 2026 y cómo la IA está cambiando el código.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Leer más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Tech 2">
                    <div class="card-body">
                        <h5 class="card-title">Dominando CSS Grid</h5>
                        <p class="card-text text-muted">Guía definitiva para crear layouts complejos de forma sencilla y eficiente.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Leer más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Tech 3">
                    <div class="card-body">
                        <h5 class="card-title">Productividad para Devs</h5>
                        <p class="card-text text-muted">5 herramientas esenciales que todo programador debería usar a diario.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <section class="bg-white py-5" id="contacto">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold">Hablemos</h2>
                        <p class="text-muted">Si tienes alguna duda o quieres colaborar, envíame un mensaje.</p>
                    </div>
                    <form class="p-4 shadow-sm border rounded bg-light">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre completo</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Tu nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" id="telefono" placeholder="+1 234 567 890">
                        </div>
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="correo" placeholder="nombre@ejemplo.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="mensaje" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Enviar mensaje</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-4 text-center mt-5">
        <div class="container">
            <p class="mb-0 text-muted">&copy; 2026 Mi Blog Personal. Creado con Bootstrap 5.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>