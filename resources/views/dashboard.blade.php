@php
$authUser = auth()->user();
@endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tarefas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <span>Olá, {{$authUser->name}}!</span>
                    <br><br>
                    <span>Tarefas do dia: 13/11/2024</span>
                    <div class="p-2">
                        <div class="mb-6 flex justify-center">
                            <form action="#">
                                <div class="flex space-x-4">
                                    <!-- Input de data - Filtro por data inicial -->
                                    <div class="flex flex-col items-center">
                                        <label for="start_date" class="mb-2 text-sm text-gray-700 font-semibold">Data Início:</label>
                                        <input type="date" id="start_date" class="border rounded-md px-4 py-2 text-sm text-gray-700" />
                                    </div>

                                    <!-- Input de data - Filtro por data final -->
                                    <div class="flex flex-col items-center">
                                        <label for="end_date" class="mb-2 text-sm text-gray-700 font-semibold">Data Fim:</label>
                                        <input type="date" id="end_date" class="border rounded-md px-4 py-2 text-sm text-gray-700" />
                                    </div>
                                </div>
                                <div class="flex flex-col p-2 items-center">
                                    <x-primary-button type="submit" class="ms-3">
                                        {{ __('Pesquisar') }}
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>
                        <div class="mb-6">
                            <a href="#">
                                <x-primary-button class="ms-3">
                                    {{ __('+ Registrar Tarefa') }}
                                </x-primary-button>
                            </a>
                        </div>

                        <table class="min-w-full bg-white border">
                            <thead>
                            <tr>
                                <th class="py-2 px-4 border-b bg-gray-50 text-gray-800 text-left text-sm font-semibold">Título</th>
                                <th class="py-2 px-4 border-b bg-gray-50 text-gray-800 text-left text-sm font-semibold">Data Início</th>
                                <th class="py-2 px-4 border-b bg-gray-50 text-gray-800 text-left text-sm font-semibold">Data Fim</th>
                                <th class="py-2 px-4 border-b bg-gray-50 text-gray-800 text-left text-sm font-semibold">Status</th>
                                <th class="py-2 px-4 border-b bg-gray-50 text-gray-800 text-left text-sm font-semibold">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="border-b hover:bg-gray-100">
                                <td class="py-2 px-4 text-sm text-gray-700">--</td>
                                <td class="py-2 px-4 text-sm text-gray-700">--</td>
                                <td class="py-2 px-4 text-sm text-gray-700">--</td>
                                <td class="py-2 px-4 text-sm text-gray-700">--</td>
                                <td class="py-2 px-4 text-sm text-gray-700">
                                    <a href="#">Editar</a>
                                    <span>|</span>
                                    <a href="#">Remover</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
