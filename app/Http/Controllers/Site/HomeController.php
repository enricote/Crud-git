<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Aluno;

class HomeController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        $alunos = Aluno::all();
        return view('home', compact('cursos','alunos'));
    }
}
