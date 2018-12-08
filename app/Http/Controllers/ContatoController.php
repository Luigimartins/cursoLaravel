<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {
    

    	$contatos = [
    		(object)["nome" => "Maria", "tel" => "988681254"],
    		(object)["nome" => "Pedro", "tel" => "981926348"],
    	];
        
        $contato = new Contato();
        $conn = $contato->lista();
        dd($conn->nome);

    	return view('contato.index', compact('contatos'));
    }

    
    public function criar(Request $req)
    {
    
    	dd($req['nome']);
    	return "Esse é o criar";
    
    }

    public function editar()
    {

    	return "Esse é o editar";

    }
}
