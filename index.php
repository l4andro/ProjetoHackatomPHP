<?php
session_start();

// Exemplo de dados do usuário (substitua com seus próprios dados ou dados obtidos do banco de dados)
$userData = array(
    'nome' => 'Fulano de Tal',
    'email' => 'fulano@example.com',
    'endereco' => 'Rua Principal, 123',
    // Adicione mais informações conforme necessário
);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doações Solidárias</title>
    <link rel="stylesheet" href="style.css">
    <!-- Incluir CSS do Bootstrap (versão 5.0) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos adicionais -->
    <style>
        /* Reduzir altura das imagens do carrossel */
        .carousel-item img {
            height: 300px; /* Ajustar altura conforme desejado */
            object-fit: cover; /* Manter proporção e cortar a imagem se necessário */
        }
        
        /* Estilos para o rodapé fixo */
        html {
            position: relative;
            min-height: 100%;
        }
        body {
            margin-bottom: 60px; /* Altura do rodapé */
        }
        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px; /* Altura do rodapé */
            background-color: #f5f5f5;
            text-align: center;
            line-height: 60px; /* Centraliza verticalmente o texto do rodapé */
        }

        /* Estilos para o ícone de login */
        .login-icon {
            position: relative;
            display: inline-block;
            cursor: pointer;
        }
        .login-icon img {
            width: 30px; /* Tamanho do ícone de login */
            height: auto;
            margin-left: 10px;
        }

        /* Estilos para o modal de perfil */
        .modal-content {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="content-wrap">
        <header>
            <h1>Bem-vindo ao Doações Solidárias</h1>
            <nav>
                <a href="index.php">Início</a>
                <a href="campaign.php">Campanhas</a>
                <a href="form.php">Doe Agora</a>
                <?php if(isset($_SESSION['user'])): ?>
                    <!-- Ícone de login -->
                    <div class="login-icon" data-bs-toggle="modal" data-bs-target="#perfilModal">
                        <img src="profile_icon.png" alt="Perfil">
                    </div>
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
                                    <!-- Adicione mais informações conforme necessário -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="logout.php">Logout</a>
                <?php else: ?>
                    <a href="login.php">Login</a>
                <?php endif; ?>
            </nav>
        </header>
        <main>
            <section class="hero">
                <h2>Ajude quem precisa. Doe agora.</h2>
                <a href="form.php" class="btn">Faça uma Doação</a>
            </section>
            
            <!-- Carrossel de Campanhas -->
            
                   
            <!-- Seção de Campanhas -->
            <section class="campaigns">
                <h2>Campanhas em Destaque</h2>
                <div class="campaign">
                    <h3>Rio Grande do Sul</h3>
                    <p>Ajude as famílias necessitadas do Rio Grande do Sul afetadas por desastres naturais.</p>
                    <a href="#" class="btn">Saiba Mais</a>
                </div>
                <div class="campaign">
                    <h3>África do Sul</h3>
                    <p>Contribua para melhorar as condições de vida das comunidades na África do Sul.</p>
                    <a href="#" class="btn">Saiba Mais</a>
                </div>
                <div class="campaign">
                    <h3>Doação de Sangue</h3>
                    <p>Participe da campanha de doação de sangue e salve vidas.</p>
                    <a href="#" class="btn">Saiba Mais</a>
                </div>
            </section>
        </main>
    </div>
    <!-- Rodapé fixo -->
    <footer>
        <p>&copy; 2024 Doações Solidárias. Todos os direitos reservados.</p>
    </footer>
    <!-- Incluir Scripts do Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
