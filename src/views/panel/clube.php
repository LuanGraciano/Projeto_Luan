
    <style>
        .header {
            background: linear-gradient(90deg, #007bff 0%, #0056b3 100%);
            color: white;
            padding: 20px 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        .footer {
            background: #343a40;
            color: white;
            padding: 20px 0;
        }
    </style>

    <div class="container mt-4">
        <h2 class="mb-4">Listagem de Membros</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Data de Adesão</th>
                    <th>Tipo de Membresia</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>João da Silva</td>
                    <td>Rua A, 123</td>
                    <td>01/01/2023</td>
                    <td>Platinum</td>
                    <td>Ativo</td>
                    <td>
                        <a href="edit?id=1" class="btn btn-warning">Editar</a>
                        <a href="delete?id=1" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td>Maria Oliveira</td>
                    <td>Rua B, 456</td>
                    <td>15/02/2023</td>
                    <td>Gold</td>
                    <td>Ativo</td>
                    <td>
                        <a href="edit?id=2" class="btn btn-warning">Editar</a>
                        <a href="delete?id=2" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

