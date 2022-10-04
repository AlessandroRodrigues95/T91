@extends('layouts.base')

@section('conteudo')

    <h1>
        Eventos
        -
        <a href="{{ route('evento.create') }}" class="btn btn-dark">
            Novo
        </a>
    </h1>

    <table class="table table-striped table-border">
        <thead>
            <tr>
                <th>Ações</th>
                <th>ID</th>
                <th>Tipo</th>
                <th>--</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($evento->get() as $evento)
            <tr>
                <td>
                    <a href="{{ route('', []) }}" class="btn btn-success">
                        Editar
                    </a>
                </td>
                <td>{{  }}</td>
                <td>{{  }}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>


@endsection
