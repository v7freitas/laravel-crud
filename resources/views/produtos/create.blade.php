@extends('produtos.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb d-flex justify-content-between align-items-center">
        <div>
            <h2>Cadastrar Novo Produto</h2>
        </div>
        <div>
            <a class="btn btn-primary" href="{{ route('produtos.index') }}">Voltar</a>
        </div>
    </div>
    
</div>

@if ($errors->any())
    <div class="alert alert-danger">
         Algo de errado no seu cadastro!<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('produtos.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3 mt-3">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="name" class="form-control" placeholder="Nome">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descrição:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Descrição"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12  mt-3">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </div>

</form>

@endsection