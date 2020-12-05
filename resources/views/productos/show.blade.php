@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-sm-4">

        <img src="https://picsum.photos/200/300/?random"/>

    </div>
    <div class="col-sm-8">

        {{ $producto->nombre }}
        <br>
        {{ $producto->precio }}
        <br>
        {{ $producto->categoria }}
        <br>
        {{ $producto->pendiente }}
        <br>
        {{ $producto->descripcion }}

        <form action={{ '/productos/edit/' . $producto->id }} method="get">
            @if($producto->pendiente)
                <button type="submit" value="1">Comprar</button>
            @else
                <button type="submit" value="0">Comprado</button>
            @endif
        </form>

    </div>
</div>

@stop
