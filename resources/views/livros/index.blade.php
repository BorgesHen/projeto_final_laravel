<x-app-layout>
    <x-slot name="header">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/livro.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/Livros/livros.css') }}">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Livros') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="tabela">
                <div class="tabela_cab">
                
                <div class="mb-4">
                <a href="{{ route('livro.create') }}" class="btn btn-primary">Criar</a>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titulo <a onclick="info()" href="#" class="bi bi-info-circle"></th>
                            <th>Autor</th>
                            <th>Gênero</th>
                            <th>Data de Lançamento</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($livro as $livro)
                        <tr>
                            <th class="colunas">{{ $livro->id }}</th>
                            <th id="nome">{{ $livro->titulo }}</th>
                            <th class="colunas">{{ $livro->autor }}</th>
                            <th class="colunas">{{ $livro->genero }}</th>
                            <th class="colunas">{{ $livro->dataLanc }}</th>

                            <td class="cab_acoes">
                            <a href="{{ route('livro.show', $livro->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('livro.edit', $livro->id) }}" class="btn btn-warning">Editar</a>
                            <form id="form-{{ $livro->id }}" action="{{ route('livro.destroy', $livro->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="deletar_livro({{ $livro->id}})">Excluir</button>
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
