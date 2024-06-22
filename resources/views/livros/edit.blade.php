
<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/livros/edit.css') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Livro</title>
        <br>
        @if ($errors->any())
        <div class="alert alert-danger dark:text-white">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br>
    </head>
    <body>
        <div class="container">
            <h1>Editar Livro</h1>
            <form action="{{ route('livro.update', $livro->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nome">Título:</label>
                    <input type="text" name="titulo" value="{{ $livro->titulo }}">
                </div>
                <div class="form-group">
                    <label for="telefone">Autor:</label>
                    <input type="text" name="autor" value="{{ $livro->autor }}">
                </div>
                <div class="form-group">
                    <label for="genero">Gênero:</label>
                    <input type="text" name="genero" value="{{ $livro->genero }}">
                </div>
                <div class="form-group">
                    <label for="dataLanc">Data de Lançamento:</label>
                    <input type="text" name="dataLanc" value="{{ $livro->dataLanc }}">
                </div>
                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="{{ route('livro.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>

