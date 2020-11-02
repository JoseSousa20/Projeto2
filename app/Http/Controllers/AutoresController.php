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

    public function show(Request $request){
        $idAutor = $request->id;

        $autores = Autor::where('ida',$idAutor)->first();

        return view('autores.show',[
            'autores'=>$autores
        ]);
    }
}
