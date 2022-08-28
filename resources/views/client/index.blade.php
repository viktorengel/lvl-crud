@extends('theme.base')

@section('content')
    <div class="container py-5 text-center">
        <h1>Listado de clientes</h1>
        <a href="{{ route('client.index') }}" class="btn btn-primary">Crear clientes</a>

        <table class="table">
            <thead>
                <th>Nombre</th>
                <th>Saldo</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                <td>FelinoHost</td>
                <td>0.0</td>
                <td>Editar - Eliminar</td>
            </tbody>
        </table>
@endsection