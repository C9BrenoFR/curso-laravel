@extends('layout')

@section('cabecalho')
    Séries
@endsection

@section('conteudo')
@if(!empty($mensagem))
<div class="alert alert-success" role="alert">
{{$mensagem}}
</div>
@endif

<a href="{{ route('form_criar_serie') }}" class="btn btn-outline-secondary mb-4">Adicionar</a>
<ul class="list-group">
    @foreach($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $serie->nome }}
            <form method="post" action="/series/remover/{{$serie->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{addslashes($serie->nome)}} da sua lista?')">
                @csrf
                @method('DELETE')
            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
            </form>
        </li>
    @endforeach
</ul>
@endsection