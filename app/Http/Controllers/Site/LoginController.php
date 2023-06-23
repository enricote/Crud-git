<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function entrar(Request $req)
    {
        $dados = $req->all();
        if(Auth::attempt(['email'=>$dados['email'], 'password'=>$dados['senha']])){
            return redirect()->route('site.home');
        }
        return redirect()->route('site.login');
    }
    public function sair()
    {
        Auth::logout();
        return redirect()->route('site.home');
    }
}
