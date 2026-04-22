<div>
<h5 class="text-center">AGREGAR TAREAS</h5>

    <div class="card p-4 mb-4 shadow-sm">
        <div class="row g-3">
            <div class="col-md-4">
                <label class="form-label">Nombre de la Tarea</label>
                <input type="text" class="form-control" wire:model="nombre">
            </div>
            <div class="col-md-8">
                <label class="form-label">Descripción (opcional)</label>
                <input type="text" class="form-control" wire:model="descripcion">
            </div>
            <div class="col-md-3">
                <label class="form-label">Fecha y Hora</label>
                <input type="datetime-local" class="form-control" wire:model="fecha_hora">
            </div>
            <div class="col-md-3">
                <label class="form-label">Tiempo Asignado (min)</label>
                <input type="number" class="form-control" wire:model="tiempo_asignado">
            </div>
            <div class="col-md-3">
                <label class="form-label">Importancia</label>
                <select class="form-select" wire:model="importancia">
                    <option value="">Seleccionar...</option>
                    <option value="Baja">Baja</option>
                    <option value="Media">Media</option>
                    <option value="Alta">Alta</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="form-label">Estatus</label>
                <select class="form-select" wire:model="estatus">
                    <option value="Pendiente">Pendiente</option>
                    <option value="En Proceso">En Proceso</option>
                    <option value="Completada">Completada</option>
                </select>
            </div>
            <div class="col-12 text-center mt-3">
                <button class="btn btn-success px-5" wire:click="guardarTarea">
                    <i class="fas fa-plus"></i> Agregar Tarea
                </button>
            </div>
        </div>
    </div>
</div>
