@extends('theme.base')

@section('content')
    <div class="container py-5 text-center">
        <h1>Crear cliente</h1>

        <form action="{{ route('client.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="Nombre" class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control" placeholder="Nombre del cliente">
                <p class="form-text">Escribir el nombre del cliente</p>
                @error('name')
                <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Nombre" class="form-label">Saldo</label>
                <input type="number" name="due" class="form-control" placeholder="Saldo del cliente" step="0.01" {{-- required --}}>
                <p class="form-text">Escribir el saldo del cliente</p>
                @error('due')
                <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="comment" class="form-label">Comentarios</label>
                <textarea name="comment" cols="30" rows="4" class="form-control"></textarea>
                <p class="form-text">Escriba algun comentario</p>
            </div>
            <button type="submit" class="btn btn-info">Guardar Cliente</button>
        </form>
@endsection