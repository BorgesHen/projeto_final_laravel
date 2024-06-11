<x-app-layout>
    <div class="container">
    <link rel="stylesheet" href="{{ asset('css/clientes/create.css') }}">
        <h1>Novo Cliente</h1>
        <form action="{{ route('clientes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</a></label>
                <input type="text" name="nome">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email">
            </div>
            <div class="form-group">
                <label for="endereco">Endereco:</label>
                <input type="text" name="endereco">
            </div>
            <button type="submit" class="btn btn-success dark:text-white">Salvar</button>
            <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</x-app-layout>
