<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function getIndex(){
        return view('productos.index', Producto::all());
    }

    public function getShow($id){
        return view('productos.show', Producto::findOrFail($id));
    }

    public function getEdit($id){
        return view('productos.edit', Producto::findOrFail($id));
    }
}
