
    <style>
        body {
            background-color: #f4f4f4; /* Cor de fundo clara */
            font-family: 'Arial', sans-serif; /* Fonte moderna */
        }
        .header {
            background-color: #007bff; /* Azul */
            color: white;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }
        .header a {
            color: white;
            margin: 0 15px;
            transition: color 0.3s;
        }
        .header a:hover {
            color: #ffd700; /* Cor dourada ao passar o mouse */
        }
        .container {
            margin-top: 20px;
        }
        .welcome-message {
            background-color: #007bff; /* Fundo azul */
            color: white; /* Texto branco */
            padding: 30px; /* Espaçamento interno */
            border-radius: 10px; /* Bordas arredondadas */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Sombra leve */
            text-align: center; /* Centraliza o texto */
            margin-bottom: 30px; /* Espaço inferior */
        }
        .form-card {
            background-color: white; /* Fundo branco para o formulário */
            border-radius: 10px; /* Bordas arredondadas */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Sombra leve */
            padding: 30px; /* Padding interno */
        }
        .form-card h2 {
            margin-bottom: 20px; /* Margem inferior */
            font-weight: bold; /* Negrito */
        }
        .form-control {
            border-radius: 5px; /* Bordas arredondadas nos campos */
        }
        .btn-custom {
            background-color: #007bff; /* Azul */
            color: white; /* Texto branco */
            border: none; /* Sem borda */
            border-radius: 5px; /* Bordas arredondadas */
            transition: background-color 0.3s; /* Transição suave */
        }
        .btn-custom:hover {
            background-color: #0056b3; /* Azul escuro ao passar o mouse */
        }
    </style>

    <div class="container mt-5">
        <h1 class="text-center">Edição de Membro</h1>
        <form method="post" action="/panel/clube/edit/<?= $clube['id'] ?>">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input value="<?= $clube['nome'] ?>" type="name" required name="nome" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço:</label>
                <input value="<?= $clube['endereco'] ?>" type="endereco" required name="nome" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="data-adesao" class="form-label">Data de Adesão:</label>
                <input value="<?= $clube['data_de_adesao'] ?>" type="data_de_adesao" required name="nome" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="tipo-membresia" class="form-label">Tipo de Membresia:</label>
                <select class="form-select" id="tipo_de_membresia" name="tipo_de_membresia" required>
                    <option <?= $clube['tipo_de_membresia'] == 'normal' ? "selected" : ""  ?> value="normal">Normal</option>
                    <option <?= $clube['tipo_de_membresia'] == 'premium' ? "selected" : ""  ?> value="premium">Premium</option>
                    <option <?= $clube['tipo_de_membresia'] == 'estudante' ? "selected" : ""  ?> value="estudante">Estudante</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status do Membro:</label>
                <select class="form-select" id="status" name="status" required>
                    <option <?= $clube['status'] == 'ativo' ? "selected" : ""  ?> value="ativo">Ativo</option>
                    <option <?= $clube['status'] == 'inativo' ? "selected" : ""  ?> value="inativo">Inativo</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Salvar Alterações</button>
            <button type="button" class="btn btn-danger" onclick="window.location.href='/membros'">Cancelar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.2/js/bootstrap.min.js"></script>

