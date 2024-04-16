<body>
    <div class="container">
        <h1>Novo Cliente</h1>
        <form action="{{ route('clientes.store') }}" method="POST">
            @csfr
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
                <label for="endereco">Endereco:</label>
                <input type="text" name="endereco">
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('autores.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
