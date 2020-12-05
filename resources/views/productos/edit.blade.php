@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
       <div class="card">
            <div class="card-header text-center">
                Modificar Producto
            </div>
            <div class="card-body" style="padding:30px">

             <form action="{{ url('/productos/edit/hola') }}" method="POST">
                {{ method_field('PUT') }}

                 @csrf

                 <div class="form-group">
                    <label for="inputNombre">Nombre</label>
                    <input type="text" name="nombre" id="inputNombre" class="form-control">
                 </div>

                 <div class="form-group">
                    <label for="inputPrecio">Precio</label>
                    <input type="number" name="precio" id="inputPrecio">
                 </div>

                 <div class="form-group">
                     <label for="inputCategoria">Categor&iacute;a</label>
                    <input type="text" name="categoria" id="inputCategoria" class="form-control">
                 </div>

                 <div class="form-group">
                     <label for="inputImagen">Imagen</label>
                    <input type="text" name="imagen" id="inputImagen" class="form-control">
                 </div>

                 <div class="form-group">
                    <label for="textAreaDescripcion">Descripci&oacute;n</label>
                    <textarea name="descripcion" id="textAreaDescripcion" class="form-control" rows="3"></textarea>
                 </div>

                 <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Modificar Producto
                    </button>
                 </div>

             </form>

          </div>
       </div>
    </div>
 </div>

@stop
