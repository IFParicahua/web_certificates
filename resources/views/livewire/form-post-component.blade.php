<div class="mt-5 md:mt-0 md:col-span-2">
    {{--  Item Seleccionado: {{ $colada }}  --}}
    <div class="shadow overflow-hidden sm:rounded-md">
        <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-4 sm:col-span-2">
                    <label for="dimension" class="block text-sm font-medium text-gray-700">dimension</label>
                    <input type="text" name="dimension" id="dimension" wire:model="dimension" value="{{ $dimension }}" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    @if($errors->has('dimension'))
                        <p>{{ $errors->first('dimension') }}</p>
                    @endif
                </div>
                <div class="col-span-4 sm:col-span-2">
                    <label for="colada" class="block text-sm font-medium text-gray-700">Colada</label>
                    <input type="text" name="colada" id="colada" wire:model="colada" value="{{ $colada }}"  autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-4 sm:col-span-2">
                    <label for="masal" class="block text-sm font-medium text-gray-700">Masa lineal</label>
                    <input type="text" name="masal" id="masal" wire:model="masal" value="{{ $masal }}" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>
        </div>
    </div>
    <button wire:click="save" class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline">
        Guardar Cambios
    </button>
</div>
