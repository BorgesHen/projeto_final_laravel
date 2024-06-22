<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/bibliotecarios/edit.css') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Bibliotecario</title>
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
            <h1>Editar Bibliotecario</h1>
            <form action="{{ route('bibliotecarios.update', $bibliotecarios->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="{{ $bibliotecarios->nome }}">
                </div>
                <div class="form-group">
                    <label for="secao">Seção:</label>
                    <input type="text" name="secao" value="{{ $bibliotecarios->secao }}">
                </div>
                <div class="form-group">
                    <label for="horario">Horário:</label>
                    <input type="text" name="horario" value="{{ $bibliotecarios->horario }}">
                </div>

                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="{{ route('bibliotecarios.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>








