@extends('produtos.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 mb-3">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('produtos.create') }}"> Cadastrar Novo Produto</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th width="280px">Configurações</th>
    </tr>
    @foreach ($produtos as $produto)
    <tr>
        <td>{{ $produto->id }}</td>
        <td>{{ $produto->name }}</td>
        <td>{{ $produto->detail }}</td>
        <td>
            <form action="{{ route('produtos.destroy',$produto->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('produtos.show',$produto->id) }}">Detalhes</a>
                <a class="btn btn-primary" href="{{ route('produtos.edit',$produto->id) }}">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Apagar</button>
            </form>
        </td>
    </tr>

    @endforeach

</table>



@endsection

