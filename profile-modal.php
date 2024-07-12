<!-- Modal de perfil -->
<div class="modal fade" id="perfilModal" tabindex="-1" aria-labelledby="perfilModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="perfilModalLabel">Seu Perfil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <p><strong>Nome:</strong> <?php echo $userData['nome']; ?></p>
                <p><strong>E-mail:</strong> <?php echo $userData['email']; ?></p>
                <p><strong>Endereço:</strong> <?php echo $userData['endereco']; ?></p>

                <h3>Suas Doações</h3>
                <?php foreach ($donations as $donation): ?>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $donation['campanha']; ?></h5>
                            <p class="card-text">Valor: R$ <?php echo $donation['valor']; ?></p>
                            <p class="card-text">Data: <?php echo date('d/m/Y', strtotime($donation['data'])); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
