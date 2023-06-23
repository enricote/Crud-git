@extends('layout.site')
@section('titulo','Alunos')
@section('conteudo')
<div class='container'>
    <h3 class='center'>Lista de Alunos</h3>
    <div class='row'>
        <table>
            <thead>
                <tr> <!-- CABECALHO -->
                    <td>Id</td>
                    <td>Nome</td>
                    <td>RA</td>
                    <td>Data de nascimento</td>
                    <td></td>
                    <td>Foto</td>
                    <td>telefone</td>
                    <td>Email</td>
                </tr>
            </thead>
            <tbody>
                @foreach($rows as $row) <!-- LOOP PRA LER A TABELA -->
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->nome }}</td>
                    <td>{{ $row->RA }}</td>
                    <td>{{ $row->data_nasc }}</td>
                    <td><img src="{{ asset($row->foto) }}" alt="{{ $row->nome }}" width=150px></td>
                    <td>{{ $row->telefone }}</td>
                    <td>{{ $row->email }}</td>
                    <td> <!-- COLUNA COM ALTERAR E EXCLUIR -->
                        <a class='btn deep-orange' href="{{ route('alunos.editar',$row->id) }}">Alterar</a>
                        <a class='btn rede' href="{{ route('alunos.excluir',$row->id) }}">Excluir</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class='row'> <!-- BOTAO ADICIONAR -->
        <a class='btn blue' href="{{ route('alunos.adicionar')}}">Adicionar</a>
    </div>
</div>
@endsection