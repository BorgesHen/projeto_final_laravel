<x-app-layout>
    <div class="container">
    <link rel="stylesheet" href="{{ asset('css/livros/create.css') }}">
        <h1>Novo Livro</h1>
        <form action="{{ route('livro.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titulo">Titulo:</a></label>
                <input type="text" name="titulo">
            </div>
            <div class="form-group">
                <label for="autor">Autor:</label>
                <input type="text" name="autor">
            </div>
            <div class="form-group">
                <label for="genero">Gênero:</label>
                <input type="text" name="genero">
            </div>
            <div class="form-group">
                <label for="dataLancamento">Data de Lançamento:</label>
                <input type="date" name="dataLanc">
            </div>
            <button type="submit" class="btn btn-success dark:text-white">Salvar</button>
            <a href="{{ route('livro.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</x-app-layout>
