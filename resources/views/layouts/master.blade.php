<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
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


<br>
@section('footer')
<div class="card">
  <div class="card-body bg-secondary text-white">
    <blockquote class="blockquote mb-6 ">
      <footer>Desarrollo de software by Luis Lagos</footer>
    </blockquote>
  </div>
</div>
@show


<!-- Incluye los scripts de Bootstrap y jQuery (necesario para algunos componentes) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>