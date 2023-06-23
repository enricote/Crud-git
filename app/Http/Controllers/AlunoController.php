<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function index()
    {
        $rows = Aluno::all();
        return view('alunos.index', compact('rows'));
    }
    public function adicionar()
    {
        return view('alunos.adicionar');
    }
    public function salvar(Request $req)
    {
        $dados = $req->all();
        if ($req->hasFile('foto')) {
            $foto = $req->file('foto');
            $num = rand(1111, 9999);
            $dir = "foto/alunos/";
            $ex = $foto->guessClientExtension();
            $nomeFoto = "foto_" . $num . "." . $ex;
            $foto->move($dir, $nomeFoto);
            $dados['foto'] = $dir . "/" . $nomeFoto;
        }
        Aluno::create($dados);
        return redirect()->route('alunos');
    }
    public function editar($id)
    {
        // repare que ele recebe o id da ROTA
        $linha = Aluno::find($id);
        // carrega o registro (realiza um select e um fetch internamente)
        return view('alunos.editar', compact('linha'));
        // manda o registro encontrado para ser editado na visão
    }
    public function excluir($id)
    {
        // repare que ele recebe o id da ROTA
        Aluno::find($id)->delete();
        // apos selecionar o registro, é chamado o método DELETE do OBJETO registro
        // é mapeado internamente como um 'delete from' interno que rodara no BD
        return redirect()->route('alunos');
        // abre a visão da lista de cursos
    }
    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        if ($req->hasFile('foto')) {
            $foto = $req->file('foto');
            $num = rand(1111, 9999);
            $dir = "foto/alunos";
            $ex = $foto->guessClientExtension();
            $nomeFoto = "foto_" . $num . "." . $ex;
            $foto->move($dir, $nomeFoto);
            $dados['foto'] = $dir . "/" . $nomeFoto;
        }
        Aluno::find($id)->update($dados);
        return redirect()->route('alunos');
    }
}
