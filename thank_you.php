<!-- thank_you.php -->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrigado pela Doação - Doações Solidárias</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="confetti.css"> <!-- Estilos opcionais para os confetes, se houver -->
</head>
<body>
    <header>
        <h1>Doações Solidárias</h1>
        <nav>
            <a href="index.php">Início</a>
            <a href="campaign.php">Campanhas</a>
            <a href="form.php">Doe Agora</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <main>
        <section class="thank-you">
            <h2>Obrigado pela sua Doação!</h2>
            <p>Sua generosidade faz a diferença. Agradecemos por seu apoio.</p>
        </section>
        <div class="gif-container">
    <img src="confetti-40.gif" alt="Confetes animados">
  </div>
    </main>
    <footer>
        <p>&copy; 2024 Doações Solidárias. Todos os direitos reservados.</p>
    </footer>
    <script src="confetti.min.js"></script>
    <script src="confetti.js"></script> 
    <!-- Incluir o script personalizado de confetes -->
</body>
</html>
