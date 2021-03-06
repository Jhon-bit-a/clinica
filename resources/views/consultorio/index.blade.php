<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            consultorio
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route('consultorio.create') }}"
                    class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">
                    Registrar consultorio</a>
                <!-- component -->
                <section class="container mx-auto p-6 font-mono">
                    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full">

                                <thead>
                                    <tr
                                        class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase
            border-b border-gray-600">
                                        <th class="px-4 py-3">idconsultorio</th>
                                        <th class="px-4 py-3">n_consultorio</th>
                                        <th class="px-4 py-3">estado</th>
                                        <th class="px-4 py-3">id enfermeria</th>
                                        <th class="px-4 py-3">id historial</th>
                                        <th class="px-4 py-3">Acciones</th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white">
                                    @foreach ($consultorio as $consultorio)
                                        <tr class="text-gray-700">

                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $consultorio->idconsultorio }}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $consultorio->n_consultorio }}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $consultorio->estado }}</td>

                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $consultorio->idenfermeria }}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $consultorio->idhistorial }}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">
                                                <div>
                                                    <a class="p-2 pl-5 pr-5 bg-yellow-400 text-gray-100 text-lg rounded-lg focus:border-4 border-yellow-300"
                                                    href="{{route('consultorio.show', $consultorio->idconsultorio)}}">
                                                        Editar
                                                    </a>
                                                </div>

                                                <form action="{{ route('consultorio.destroy', $consultorio->idconsultorio) }}" method="POST">
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
