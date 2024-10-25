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
        <?php foreach ($clubes as $key => $clube): ?>
            <tr>
                <td><?= $clube['nome'] ?></td>
                <td><?= $clube['endereco'] ?></td>
                <td><?= $clube['data_de_adesao'] ?></td>
                <td><?= $clube['tipo_de_membresia'] ?></td>
                <td><?= $clube['status'] ?></td>
                <td>
                    <div style="display: flex; gap: 10px;">
                        <a href="/PROJETO_LUAN/panel/clube/edit/<?= $clube['id'] ?>" class="btn btn-warning">Editar</a>
                        <form action="/PROJETO_LUAN/panel/clube/delete/<?= $clube['id'] ?>" method="post">
                            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Deletar</button>
                        </form>
                    </div>
                </td>

            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>