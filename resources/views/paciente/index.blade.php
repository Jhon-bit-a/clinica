<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            paciente
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route('paciente.create') }}"
                    class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">
                    Registrar paciente</a>
                <!-- component -->
                <section class="container mx-auto p-6 font-mono">
                    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full">

                                <thead>
                                    <tr
                                        class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase
            border-b border-gray-600">
                                        <th class="px-4 py-3">Nombres</th>
                                        <th class="px-4 py-3">Apellidos</th>
                                        <th class="px-4 py-3">direccion</th>
                                        <th class="px-4 py-3">fecha_naciemiento</th>
                                        <th class="px-4 py-3">genero</th>
                                        <th class="px-4 py-3">estado</th>
                                        <th class="px-4 py-3">Acciones</th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white">
                                    @foreach ($paciente as $paciente)
                                        <tr class="text-gray-700">

                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $paciente->nombres }}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $paciente->apellidos }}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $paciente->direccion }}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $paciente->fecha_nacimiento }}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $paciente->genero }}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $paciente->estado }}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">
                                                <div>
                                                    <a class="p-2 pl-5 pr-5 bg-yellow-400 text-gray-100 text-lg rounded-lg focus:border-4 border-yellow-300"
                                                    href="{{route('paciente.show', $paciente->id)}}">
                                                        Editar
                                                    </a>
                                                </div>

                                                <form action="{{ route('paciente.destroy', $paciente) }}" method="POST">
                                                    @csrf @method('DELETE')
                                                    <button
                                                        class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">
                                                        Eliminar
                                                    </button>
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
