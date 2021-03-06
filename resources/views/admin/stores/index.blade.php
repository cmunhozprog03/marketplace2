@extends('layouts.app')

@section('content')
@if(!$store)
    <a href="{{route('admin.stores.create')}}" class="btn btn-lg btn-success">Criar Loja</a>
@endif
<div class="table-responsive">

    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Loja</th>
                <th>Total Produtos</th>
                <th>Ações</th>
            </tr>
        <tbody>

            <tr>
                <td>{{$store->id}}</td>
                <td>{{$store->name}}</td>
                <td>{{$store->products->count()}}</td>


                <td>
                    <div class="btn-group">
                        <a href="{{route('admin.stores.edit', ['store' => $store->id])}}"
                            class="btn btn-sm btn-default">Editar</a>
                        <form action="{{route('admin.stores.destroy', ['store' => $store->id])}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-sm btn-danger">Excluir</button>

                        </form>
                    </div>

                </td>
            </tr>


        </tbody>
        </thead>
    </table>

    

</div>


@endsection