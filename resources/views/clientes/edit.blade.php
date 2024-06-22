
<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/clientes/edit.css') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Cliente</title>
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
            <h1>Editar Cliente</h1>
            <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="{{ $cliente->nome }}">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="text" name="telefone" value="{{ $cliente->telefone }}">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" value="{{ $cliente->email }}">
                </div>
                <div class="form-group">
                    <label for="endereco">Endereco:</label>
                    <input type="text" name="endereco" value="{{ $cliente->endereco }}">
                </div>
                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>

