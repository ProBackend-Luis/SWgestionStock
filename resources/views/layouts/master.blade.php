<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tu Aplicación</title>
    <!-- Incluye los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- También puedes incluir tu propio archivo de estilos personalizados -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>

@section('header')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Control-Stock</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('inicio')}}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('productos')}}">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('categorias')}}">Categorías</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('sucursales')}}">Sucursales</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login.html">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@show


<!-- Contenido de la página -->
<div class="container mt-3">

    @yield('content')

</div>



@section('footer')
<div class="card">
  <div class="card-body bg-dark text-white">
    <blockquote class="blockquote mb-6 ">
      <footer>Desarrollo de software by Luis Lagos</footer>
    </blockquote>
  </div>
</div>
@show


<!-- Incluye los scripts de Bootstrap y jQuery (necesario para algunos componentes) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>