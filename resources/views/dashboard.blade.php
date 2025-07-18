<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}

                    <div class="mt-4">
                        <table class="table-auto w-full border-collapse border border-gray-400 dark:border-gray-600">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th class="px-4 py-2 border border-gray-400 dark:border-gray-600 text-center">ID</th>
                                    <th class="px-4 py-2 border border-gray-400 dark:border-gray-600 text-left">Nombre</th>
                                    <th class="px-4 py-2 border border-gray-400 dark:border-gray-600 text-left">Documento de Identidad</th>
                                    <th class="px-4 py-2 border border-gray-400 dark:border-gray-600 text-left">Email</th>
                                    <th class="px-4 py-2 border border-gray-400 dark:border-gray-600 text-center">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                                        <td class="px-4 py-2 border border-gray-400 dark:border-gray-600 text-center">{{ $user->id }}</td>
                                        <td class="px-4 py-2 border border-gray-400 dark:border-gray-600">{{ $user->name }}</td>
                                        <td class="px-4 py-2 border border-gray-400 dark:border-gray-600">{{ $user->documento_identidad }}</td>
                                        <td class="px-4 py-2 border border-gray-400 dark:border-gray-600">{{ $user->email }}</td>
                                        <td class="px-4 py-3 border border-gray-400 dark:border-gray-600 text-center">
                                            <a href="{{ route('generate-primer-diploma', ['id' => $user->id]) }}" 
                                            class="bg-gray-700 text-white p-2 rounded-2xl text-sm py-2 px-4 hover:bg-gray-950 ease-in-out duration-300" 
                                            target="_blank">
                                                Descargar
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- Enlaces de paginación -->
                        <div class="mt-4">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>