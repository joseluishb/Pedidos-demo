<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController2 extends Controller
{
    public  function show($id)
    {
        return "Mostrar datos del producto $id";
    }

}
