<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutoresController extends Controller
{
    //
    public function index(){
        $autores = Autor::all();
        return view ('autores.index',[
            'autores'=>$autores
        ]);
    }
}
