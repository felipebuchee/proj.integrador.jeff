<div class="container mt-5">
    <h2>Lista de Usuários</h2>
    <a href="<?= URL_BASE ?>/usuarios/cadastrar" class="btn btn-primary mb-3">Novo Usuário</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Perfil</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $u): ?>
                <tr>
                    <td><?= $u['nomeUsuario'] ?></td>
                    <td><?= $u['email'] ?></td>
                    <td><?= $u['perfil'] ?></td>
                    <td>
                        <a href="<?= URL_BASE ?>/usuarios/editar?id=<?= $u['id'] ?>" class="btn btn-primary btn-sm">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <a href="<?= URL_BASE ?>/usuarios/excluir?id=<?= $u['id'] ?>" class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>