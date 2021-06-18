
@extends('layouts.app')

@section('content')
<div class="container">
<div class="card bg-light shadow">
<div class="card-body">
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-ligth bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item active">
        <a class="nav-link text-white btn  bg-info" href="home">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link btn  text-white ml-1 bg-info" href="home">Categorias <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link btn  ml-1 text-white bg-info" href="home">Proveedores <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link btn  ml-1 text-white bg-info" href="home">Compras <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link btn  ml-1 text-white bg-info" href="home">Productos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link btn  ml-1 text-white bg-info" href="home">Clientes <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link btn  ml-1 text-white bg-info" href="home">Ventas <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link btn  ml-1 text-white bg-info" href="home">Creditos <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<!-- NAVBAR -->
</div>
</div>
</div>
@endsection