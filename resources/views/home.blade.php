@extends('layout.site')
@section('titulo','Home')
@section('conteudo')
<div class='container'>
    <h3 class='center'>Home</h3>
    <div class="row">
        <h3>Cursos</h3>
        @foreach($cursos as $curso)
        <div class="col s12 m4" width=300px>    
            <div class="card" >
                <div class="card-image" >
                    <img src="{{asset($curso->imagem)}}" height=25%>
                </div>
                <div class="card-content">
                    <h4>{{$curso->titulo}}</h4>
                    <p>{{$curso->descricao}}</p>
                </div>
                <div class="card-action">
                    <a href="{{ route('admin.cursos') }}">Acessar cursos</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <h3>Alunos</h3>
        @foreach($alunos as $aluno)
        <div class="col s12 m4" width=300px>
            <div class="card">
                <div class="card-image">
                    <img src="{{asset($aluno->foto)}} " height="25%">
    
                </div>
                <div class="card-content">
                    <h4>{{$aluno->nome}}</h4>
                    <p>{{$aluno->RA}}</p>
                    <p>{{$aluno->data_nasc}}</p>
                </div>
                <div class="card-action">
                    <a href="{{ route('alunos') }}">Acessar Alunos</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection