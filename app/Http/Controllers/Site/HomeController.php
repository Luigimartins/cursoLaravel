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
    	$cursos = Curso::all();
    	$users = User::all();
    	return view('home', compact('cursos','users'));
    }
}
