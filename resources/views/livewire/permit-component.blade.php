<div class="container mx-auto mt-4 bg-white rounded-lg">
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
              <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                  <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Usuario
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Cargo
                    </th>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Guardar
                    </th>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Editar
                    </th>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Generar
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                      <span class="sr-only">Edit</span>
                    </th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($usuarios as $usuario)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                              {{--  <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="">  --}}
                                @if ($usuario->profile_photo_path)
                                    <img src="{{ asset('storage/'.$usuario->profile_photo_path)}}" alt="{{ $usuario->name }}" class="rounded-full h-10 w-10 object-cover">
                                @else
                                    <img src="{{ $usuario->profile_photo_url }}" alt="{{ $usuario->name }}" class="rounded-full h-10 w-10 object-cover">
                                @endif

                            </div>
                            <div class="ml-4">
                              <div class="text-sm font-medium text-gray-900">
                                {{ $usuario->name }}
                              </div>
                              <div class="text-sm text-gray-500">
                                {{ $usuario->email }}
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="text-sm text-gray-900">{{ $usuario->permit->rol->nombre }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap w-1/12 text-center">
                            @if ($usuario->permit->guardar)
                                <span class="px-2 py-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    <i class="fas fa-check"></i>
                                </span>
                            @else
                                <span class="px-2 py-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                    <i class="fas fa-times"></i>
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap w-1/12 text-center">
                            @if ($usuario->permit->editar)
                                <span class="px-2 py-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    <i class="fas fa-check"></i>
                                </span>
                            @else
                                <span class="px-2 py-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                    <i class="fas fa-times"></i>
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap w-1/12 text-center">
                            @if ($usuario->permit->generar)
                                <span class="px-2 py-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    <i class="fas fa-check"></i>
                                </span>
                            @else
                                <span class="px-2 py-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                    <i class="fas fa-times"></i>
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium w-2/12">
                            <button type="button" class="btn-outline-primary transition duration-300 ease-in-out focus:outline-none focus:shadow-outline border border-red-500 hover:bg-red-500 text-red-500 hover:text-white font-normal py-2 px-4 rounded-md">
                                Eliminar
                            </button>
                            <button type="button" class="btn-outline-primary transition duration-300 ease-in-out focus:outline-none focus:shadow-outline border border-blue-500 hover:bg-blue-500 text-blue-500 hover:text-white font-normal py-2 px-4 rounded-md">
                                Editar
                            </button>
                        </td>
                    </tr>
                    @empty

                    @endforelse
                  <!-- More items... -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
</div>
