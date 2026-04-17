<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $tareas = [
        ['titulo' => 'Planta', 'descripcion' => 'Regar las plantas del balcón'],
        ['titulo' => 'Libro', 'descripcion' => 'Leer dos capítulos de Laravel'],
        ['titulo' => 'Supermercado', 'descripcion' => 'Comprar leche y pan'],
        ['titulo' => 'Gimnasio', 'descripcion' => 'Rutina de pierna'],
        ['titulo' => 'Proyecto', 'descripcion' => 'Subir cambios a GitHub'],
    ];

    foreach ($tareas as $tarea) {
        \App\Models\Tarea::create([
            'titulo' => $tarea['titulo'],
            'descripcion' => $tarea['descripcion'],
            'completada' => false,
            'categoria_id' => 1, // Esto las asigna a la categoría "General"
         ]);
        }
    }
}
