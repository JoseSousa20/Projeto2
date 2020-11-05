<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivrosController extends Controller
{
    //
    public function index(){
    //$livro = Livro::all()->sortbydesc('idl');
    $livro = Livro::paginate(4);
    return view ('livros.index', [
        'livros'=>$livro
    ]);
    }

    public function show(Request $request){
        $idLivro = $request->id;

        //$livro = Livro::findOrFail($idLivro);

        //$livro = Livro::find($idLivro);

        $livro = Livro::where('id_livro',$idLivro)->first();

        return view('livros.show',[
            'livro'=>$livro
        ]);
    }

}
