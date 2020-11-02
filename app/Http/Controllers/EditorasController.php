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

    public function show(Request $request){
        $idEditora = $request->id;

        $editoras = Editora::where('ide',$idEditora)->first();

        return view('editora.show',[
            'editora'=>$editoras
        ]);
    }
}
