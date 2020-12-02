@extends('layouts.master')

@section('content')

    <form action="/" method="post">
        <label for="inputNombre">Nombre</label>
        <input type="text" name="nombre" id="inputNombre">

        <label for="precio">Precio</label>
        <input type="number" name="precio" id="inputPrecio">

        <label for="inputCategoria">Categor&iacute;a</label>
        <input type="text" name="categoria" id="inputCategoria">

        <label for="inputImagen">Imagen</label>
        <input type="text" name="imagen" id="inputImagen">
    </form>

@stop
