<x-app-layout>
    <x-slot name="header">
    <link rel="stylesheet" href="{{ asset('css/clientes/clientes.css') }}">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="tabela">
                <div class="tabela_cab">
                
                <div class="mb-4">
                <a href="{{ route('clientes.create') }}" class="btn btn-primary">Criar</a>
                </div>

                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Email</th>
                            <th>Endereco</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                        <tr>
                            <th class="colunas">{{ $cliente->id }}</th>
                            <th id="nome">{{ $cliente->nome }}</th>
                            <th class="colunas">{{ $cliente->telefone }}</th>
                            <th class="colunas">{{ $cliente->email }}</th>
                            <th class="colunas">{{ $cliente->endereco }}</th>

                            <td class="cab_acoes">
                            <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-info dark:text-white">Detalhes</a>
                            <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning dark:text-white">Editar</a>
                            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger dark:text-white">Excluir</button>
                            </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
