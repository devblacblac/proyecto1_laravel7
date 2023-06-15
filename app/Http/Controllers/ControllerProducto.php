<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerProducto extends Controller
{
    public function index(){
        //echo "mi controllador";
        //die();
        
        return view('inicio.inicio_index');
    }
     //se crea un menu para que se marque de coloresla opcion
     
    public function adminProductos(){
        //se crea una carpeta llamada producto.un archivo producto
        
        return view('productos.producto_index');

    }
}
