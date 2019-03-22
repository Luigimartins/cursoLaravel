<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;
use App\User;

class HomeController extends Controller
{
    public function index()
    {
    	$cursos = Curso::where('publicado','=','sim')->get();
    	$users = User::all();
    	return view('home', compact('cursos','users'));
    }

    public function ver($id)
    {
    	$curso = Curso::find($id);
    	return view('list',compact('curso'));
    }
}
