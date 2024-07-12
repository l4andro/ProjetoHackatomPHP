<?php
session_start();
if(!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doe Agora - Doações Solidárias</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <header>
        <h1>Doe Agora</h1>
        <nav>
            <a href="index.php">Início</a>
            <a href="campaign.php">Campanhas</a>
            <a href="form.php">Doe Agora</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <h2 class="categorias-texto">AJUDE COM SUAS DOAÇÕES</h2>


<!------------------------------------ INÍCIO NOVA SEÇÃO DE DOAÇÕES ------------------------------------>
<div class="container-principal">
        <div class="secao-doacoes">
            <div class="imagem-doacao">
                <img src="https://imgur.com/zk9FjVT.png" alt="Imagem de Doação" width="600" height="auto">
            </div>
            <div class="texto-doacao">
                <h3>Ajude com suas Doações</h3>
                <p>Objetivos: ..................................................................</p>
                <p>Para quem: ..................................................................</p>
                <p>Para onde irá a doação: .........................................................</p>
            </div>
        </div>
        <!-- Linha Divisória -->
        <hr class="linha-divisoria">
        <!-- Contêiner do Formulário de Doação -->
        <div class="form-container">
            <div class="form-wrapper">
                <form class="form-doacao" action="thank_you.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" placeholder="Digite o seu nome" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço:</label>
                        <input type="text" id="endereco" name="endereco" placeholder="Endereço" required>
                    </div>
                    <div class="form-group">
                        <label for="valor">Valor da Doação:</label>
                        <input type="number" id="valor" name="valor" min="1" placeholder="Valor da Doação" required>
                    </div>
                    <div class="form-group">
                        <label for="donation-type">Tipo de doação:</label><br>
                        <select id="donation-type" name="donation_type" required>
                            <option value="financeira">Financeira</option>
                            <option value="alimentos">Alimentos</option>
                            <option value="roupas">Roupas</option>
                            <option value="outros">Outros</option>
                        </select><br><br>
                    </div>
                    <div class="form-group">
                        <label for="donation-description">Descrição:</label><br>
                        <textarea id="donation-description" name="donation_description" rows="4" placeholder="Descrição sobre o item da doação" required></textarea><br><br>
                    </div>
                    <div class="form-group">
                        <label for="donation-image">Imagem da doação:</label><br>
                        <input type="file" id="donation-image" name="donation_image"><br><br>
                    </div>
                    <div class="form-group">
                        <button type="submit">Enviar Doação</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!------------------------------------ FIM NOVA SEÇÃO DE DOAÇÕES ------------------------------------>
    <script src="script.js"></script>
</body>
</html>
