@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Lista de Tareas</h1>

<a href="{{ route('tareas.create') }}" class="btn btn-primary mb-3">Nueva Tarea</a>

<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    @foreach($tareas as $tarea)
        <div class="card p-4 shadow">
            <h2 class="text-xl font-semibold">{{ $tarea->titulo }}</h2>
            <p>{{ $tarea->descripcion }}</p>
            <p><strong>Categoría:</strong> {{ $tarea->categoria->nombre }}</p>
            
            <a href="{{ route('tareas.edit', $tarea) }}" class="btn btn-info mt-2">Editar</a>

            <form action="{{ route('tareas.destroy',$tarea) }}" method="POST" class="mt-2">
                @csrf @method('DELETE')
                <button class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    @endforeach
    <h2>Nombres: Ariatna Barcenas <br>
            Margarita Espinoza <br>
            Dominical<h2>
</div>
@endsection