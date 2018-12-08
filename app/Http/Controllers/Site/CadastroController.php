<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class CadastroController extends Controller
{

	public function index()
	{
		return view('cadastro.index');
	}

    public function cadastrar(Request $req)
    {
    	$dados = $req->all();

    	$dados['password'] = bcrypt($dados['password']);

    	if (User::where('email','=',$dados['email'])->count()){
        	return redirect()->route('site.cadastrar');
        }else{
        	User::create($dados);
        	return redirect()->route('site.login');
        }
    }
}
