<div>
    <form wire:submit="guardarTarea">
        <div class="max-w-5xl mx-auto mt-8 bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden">

            <div
                class="bg-gray-50 px-6 py-4 border-b border-gray-200 flex flex-col sm:flex-row justify-between items-center gap-4">
                <h5 class="text-xl font-bold text-gray-800 m-0">
                    <i class="fas fa-tasks text-blue-600 mr-2"></i> Agregar Tareas
                </h5>
            </div>
            @if (session()->has('mensaje'))
                <div
                    class="bg-green-100 border-l-4 border-green-500 text-green-800 p-4 m-6 mb-0 rounded-r shadow-sm flex items-center">
                    <i class="fas fa-check-circle text-green-500 text-xl mr-3"></i>
                    <p class="font-semibold m-0">{{ session('mensaje') }}</p>
                </div>
            @endif

            <div class="p-6 md:p-8">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6">

                    <div class="md:col-span-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Nombre de la Tarea</label>
                        <input type="text"
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all"
                            wire:model="nombreTarea">
                    </div>

                    <div class="md:col-span-8">
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Descripción (opcional)</label>
                        <input type="text"
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all"
                            wire:model="descripcion">
                    </div>

                    <div class="md:col-span-3">
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Fecha y Hora</label>
                        <input type="datetime-local"
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all"
                            wire:model="fechaHora">
                        @error('fechaHora')
                            <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="md:col-span-3">
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Tiempo (min)</label>
                        <input type="number"
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all"
                            placeholder="Ej. 60" wire:model="tiempoAsignado">
                    </div>

                    <div class="md:col-span-3">
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Importancia</label>
                        <select
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all"
                            wire:model="importancia">
                            <option value="">Seleccionar...</option>
                            <option value="3">Baja</option>
                            <option value="2">Media</option>
                            <option value="1">Alta</option>
                        </select>
                    </div>

                </div>
            </div>

            <div class="bg-gray-50 px-6 py-4 border-t border-gray-200 flex justify-end">
                <button
                    class="bg-green-500 hover:bg-green-600 text-white font-bold py-2.5 px-8 rounded-lg shadow-sm transition-colors flex items-center">
                    <i class="fas fa-save mr-2"></i> Guardar Tarea
                </button>
            </div>

        </div>
    </form>

</div>
