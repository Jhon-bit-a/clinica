<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            enfermeria
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route('enfermeria.create') }}"
                    class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">
                    Registrar enfermeria</a>
                <!-- component -->
                <section class="container mx-auto p-6 font-mono">
                    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full">

                                <thead>
                                    <tr
                                        class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase
            border-b border-gray-600">
                                        <th class="px-4 py-3">idenfermeria</th>
                                        <th class="px-4 py-3">presion</th>
                                        <th class="px-4 py-3">talla</th>
                                        <th class="px-4 py-3">peso</th>
                                        <th class="px-4 py-3">id personal</th>
                                        <th class="px-4 py-3">id historial</th>
                                        <th class="px-4 py-3">Acciones</th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white">
                                    @foreach ($enfermerium as $enfermerium)
                                        <tr class="text-gray-700">

                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $enfermerium->idenfermeria }}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $enfermerium->presion }}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $enfermerium->talla }}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $enfermerium->peso }}</td>

                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $enfermerium->idpersonal }}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $enfermerium->idhistorial }}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">
                                                <div>
                                                    <a class="p-2 pl-5 pr-5 bg-yellow-400 text-gray-100 text-lg rounded-lg focus:border-4 border-yellow-300"
                                                    href="{{route('enfermeria.show', $enfermerium->idenfermeria)}}">
                                                        Editar
                                                    </a>
                                                </div>

                                                <form action="{{ route('enfermeria.destroy', $enfermerium->idenfermeria) }}" method="POST">
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
