<x-app-layout>
    <x-slot name="header">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/bibliotecarios.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/bibliotecarios/bibliotecarios.css') }}">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Bibliotecarios') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="tabela">
                <div class="tabela_cab">
                
                <div class="mb-4">
                <a href="{{ route('bibliotecarios.create') }}" class="btn btn-primary">Criar</a>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome <a onclick="info()" href="#" class="bi bi-info-circle"></th>
                            <th>Seção</th>
                            <th>Horário</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bibliotecarios as $bibliotecario)
                        <tr>
                            <th class="colunas">{{ $bibliotecario->id }}</th>
                            <th id="nome">{{ $bibliotecario->nome }}</th>
                            <th class="colunas">{{ $bibliotecario->secao }}</th>
                            <th class="colunas">{{ $bibliotecario->horario }}</th>

                            <td class="cab_acoes">
                            <a href="{{ route('bibliotecarios.show', $bibliotecario->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('bibliotecarios.edit', $bibliotecario->id) }}" class="btn btn-warning">Editar</a>
                            <form id="form-{{ $bibliotecario->id }}" action="{{ route('bibliotecarios.destroy', $bibliotecario->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="deletar_bibliotecario({{ $bibliotecario->id}})">Excluir</button>
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
