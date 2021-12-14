<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            receta
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- component -->
                <section class="container mx-auto p-6 font-mono">
                    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                        <div class="w-full overflow-x-auto">
                            <a href="{{ route('receta.create') }}"
                                class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">Registrar
                                receta</a>
                            <table class="w-full">
                                <thead>
                                    <tr
                                        class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                        <th class="px-4 py-3">Id receta</th>
                                        <th class="px-4 py-3">cantidad</th>
                                        <th class="px-4 py-3">nombre receta</th>
                                        <th class="px-4 py-3">detalle</th>
                                        <th class="px-4 py-3">estado</th>
                                        <th class="px-4 py-3">id historial</th>
                                        <th class="px-4 py-3">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @foreach ($receta as $receta)
                                        <tr class="text-gray-700">
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $receta->idreceta }} </td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $receta->cantidad }}  </td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $receta->nombre_receta }} </td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $receta->detalle }}  </td>

                                            @if($receta->estado == 'activo')
                                            <td class="px-4 py-3 text-xs border">
                                              <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> {{$receta->estado}} </span>
                                            </td>
                                          @else
                                            <td class="px-4 py-3 text-xs border">
                                              <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-sm"> {{$receta->estado}} </span>
                                            </td>
                                          @endif

                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $receta->idhistorial }}
                                            </td>



                                            <td class="px-4 py-3 text-ms font-semibold border">
                                                <div>
                                                    <a class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-green-300"
                                                        href="{{ route('receta.show', $receta->idreceta) }}">
                                                        Editar
                                                    </a>
                                                </div>
                                                <br>

                                                <form action="{{ route('receta.destroy', $receta->idreceta) }}" method="POST">
                                                    @csrf @method('DELETE')
                                                    <button
                                                        class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-red-300">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
