@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Editar Tarea</h1>

<form action="{{ route('tareas.update', $tarea) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Título</label>
        <input type="text" name="titulo" class="form-control" value="{{ $tarea->titulo }}">
    </div>
    <div class="mb-3">
        <label>Descripción</label>
        <textarea name="descripcion" class="form-control">{{ $tarea->descripcion }}</textarea>
    </div>
    <div class="mb-3">
        <label>Categoría</label>
        <select name="categoria_id" class="form-control">
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}" 
                    @if($tarea->categoria_id == $categoria->id) selected @endif>
                    {{ $categoria->nombre }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Actualizar</button>
</form>
@endsection