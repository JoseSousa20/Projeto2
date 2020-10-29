<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editora;

class EditorasController extends Controller
{
    //
    public function index(){
        $editoras = Editora::all();
        return view ('editoras.index',[
            'editoras'=>$editoras
        ]);
    }
}
