@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Nueva Tarea</h1>

<form action="{{ route('tareas.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Título</label>
        <input type="text" name="titulo" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descripción</label>
        <textarea name="descripcion" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label>Categoría</label>
        <select name="categoria_id" class="form-control">
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>
@endsection