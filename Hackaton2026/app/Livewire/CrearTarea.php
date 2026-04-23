<?php

namespace App\Livewire;

use App\Models\Tarea;
use Illuminate\Validation\Rule;
use Livewire\Component;

class CrearTarea extends Component
{
    public function render()
    {
        return view('livewire.crear-tarea')->layout('layouts.app');
    }

    public $nombreTarea;

    public $descripcion;

    public $fechaHora;

    public $tiempoAsignado;

    public $importancia;

    public $estatus;

    public function guardarTarea()
    {
        $this->validate();

        Tarea::create([
            'nombreTarea' => $this->nombreTarea,
            'descripcion' => $this->descripcion,
            'fechaHora' => $this->fechaHora,
            'tiempoAsignado' => $this->tiempoAsignado,
            'importancia' => $this->importancia,
        ]);
        $this->reset([
            'nombreTarea',
            'descripcion',
            'fechaHora',
            'tiempoAsignado',
            'importancia',
        ]);

        session()->flash('mensaje', 'Tarea agregada correctamente');
    }

    public function rules()
    {

        return [
            'fechaHora' => [
                'required',
                'date',
                Rule::unique('tareas', 'fechaHora'),
            ],
        ];
    }

    public function messages()
    {
        return [
            'fechaHora.unique' => 'Ya tienes una tarea asignada en esa fecha y hora',
        ];
    }
}
