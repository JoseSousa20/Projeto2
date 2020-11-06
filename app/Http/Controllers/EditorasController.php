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

        $editoras = Editora::where('id_editora',$idEditora)->with('livros')->first();

        return view('editoras.show',[
            'editoras'=>$editoras
        ]);
    }
}
