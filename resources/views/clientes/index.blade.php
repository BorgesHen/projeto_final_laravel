<x-app-layout>
    <x-slot name="header">
    <script src="{{ asset('js/clientes.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{ asset('css/clientes/clientes.css') }}">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Clientes') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="tabela">
                <div class="tabela_cab">
                
                <div class="mb-4">
                <a href="{{ route('clientes.create') }}" class="btn btn-primary">Criar</a>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome <a onclick="info()" href="#" class="bi bi-info-circle"></th>
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
                            <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning">Editar</a>
                            <form id="form-{{ $cliente->id }}" action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="deletar_cliente({{ $cliente->id}})">Excluir</button>
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
