<body>
    <div class="container">
        <h1>Novo Autor</h1>
        <form action="{{ route('clientes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="int" name="telefone">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email">
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco">
            </div>
            <div class="form-group">
                <label for="cliente_ID">Cliente_ID:</label>
                <input type="bigint" name="cliente_ID">
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>