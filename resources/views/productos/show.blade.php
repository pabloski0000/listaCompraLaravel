@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-sm-4">

        <img src="https://picsum.photos/200/300/?random"/>

    </div>
    <div class="col-sm-8">

        {{ $arrayProductos[0] }}
        <br>
        {{ $arrayProductos[1] }}

    </div>
</div>

@stop
