
<div class="container mx-auto mt-4 bg-white rounded-lg">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="px-4 pt-5 mb-2">
        <div class=" h-16 relative">
            <div class="absolute top-0 right-0 text-sm">
                <a href="{{ route('show.pdf')}}" class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">
                    <i class="far fa-file-pdf"></i> Ver PDF
                </a>
                <a href="{{ route('download.pdf')}}" class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 mx-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">
                    <i class="fas fa-download"></i> Descargar PDF
                </a>
                <button type="button" onclick="document.getElementById('modal-excel').showModal()" class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline">
                    <i class="fas fa-upload"></i> Subir Excel
                </button>
            </div>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            {{ $prompt }}
            @if ($datos->count())
              <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            dimension
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Colada
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Masa lineal
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Fy(MPa)
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Fs(MPa)
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Fs/Fy
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            ALARGAM.
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Doblado
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Prom. AlturaNerv (mm)
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Prom. EspacNerv(m)
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Prom AngNerv (mm)
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            GAP(mm)
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($datos as $dato)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $dato->dimension }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $dato->colada }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $dato->masa_lineal }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $dato->fy_mpa }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $dato->fs_mpa }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $dato->fs_fy }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $dato->alargamiento }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $dato->doblado }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $dato->alturanerv_mm }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $dato->espacnerv_m }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $dato->angNerv_mm }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $dato->gap }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" wire:click="selectItem({{ $dato->id }}, 'update')" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                        </td>
                    </tr>
                    @empty

                    @endforelse
                    <!-- More items... -->
                    </tbody>
              </table>
            @endif
            </div>
            <div class="bg-gray-100 px-6 py-4 border-t border-gray-200">
                {{ $datos->links() }}
            </div>
           </div>
        </div>
    </div>
    <dialog id="modal-excel" class=" w-11/12 md:w-3/12 p-5  bg-white rounded-md ">

        <div class="flex flex-col w-full h-auto ">
             <!-- Header -->
             <div class="flex w-full h-auto justify-center items-center">
               <div class="flex w-10/12 h-auto py-3 justify-center items-center text-2xl font-bold"> </div>
               <div onclick="document.getElementById('modal-excel').close();" class="flex w-1/12 h-auto justify-center cursor-pointer">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
               </div>
               <!--Header End-->
             </div>
               <!-- Modal Content-->
                <div>
                    @livewire('modal-excel-component')
                </div>
               <!-- End of Modal Content-->
             </div>
     </dialog>
     <dialog id="modal-edit" class=" w-11/12 md:w-3/12 p-5  bg-white rounded-md ">

        <div class="flex flex-col w-full h-auto ">
             <!-- Header -->
             <div class="flex w-full h-auto justify-center items-center">
               <div class="flex w-10/12 h-auto py-3 justify-center items-center text-2xl font-bold"> </div>
               <div onclick="document.getElementById('modal-edit').close();" class="flex w-1/12 h-auto justify-center cursor-pointer">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
               </div>
               <!--Header End-->
             </div>
               <!-- Modal Content-->
               @livewire('form-post-component')
               <!-- End of Modal Content-->
             </div>
     </dialog>
</div>
<script>
    window.addEventListener('closeModal', event =>{
        document.getElementById('modal-edit').close()
    })
    window.addEventListener('openModal', event =>{
        document.getElementById('modal-edit').showModal()
    })
</script>
