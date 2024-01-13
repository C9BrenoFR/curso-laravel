@extends('layout')

@section('cabecalho')
   Adicionar Série
@endsection

@section('conteudo')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="" method="post">
    @csrf
    <div class="mb-3 form-group">
        <label for="nome" class="form-label">Nome da serie</label>
        <input type="text" class="form-control" id="nome" name="nome">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection