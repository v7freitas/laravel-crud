@extends('produtos.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb d-flex justify-content-between align-items-center">
        <div class="pull-left">
            <h2> Detalhes do Produto</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('produtos.index') }}"> Voltar</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nome:</strong>
            {{ $produto->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Descrição:</strong>
            {{ $produto->detail }}
        </div>
    </div>
</div>



@endsection