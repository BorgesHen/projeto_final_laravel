<x-app-layout>
    <div class="container">
    <link rel="stylesheet" href="{{ asset('css/bibliotecarios/create.css') }}">
        <h1>Novo Bibliotecario</h1>
        <form action="{{ route('bibliotecarios.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</a></label>
                <input type="text" name="nome">
            </div>
            <div class="form-group">
                <label for="secao">Seção:</label>
                <input type="text" name="secao">
            </div>
            <div class="form-group">
                <label for="horario">Horário:</label>
                <input type="text" name="horario">
            </div>
            <button type="submit" class="btn btn-success dark:text-white">Salvar</button>
            <a href="{{ route('bibliotecarios.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</x-app-layout>
