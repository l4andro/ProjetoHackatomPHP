<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Doações Solidárias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Login</h1>
        <nav>
            <a href="index.php">Início</a>
            <a href="campaign.php">Campanhas</a>
            <a href="form.php">Doe Agora</a>
            <a href="login.php">Login</a>
        </nav>
    </header>
    <main>
        <section class="login-form">
            <h2>Faça seu Login</h2>
            <form action="process_login.php" method="POST">
                <label for="user_type">Tipo de Usuário:</label>
                <select id="user_type" name="user_type" required>
                    <option value="citizen">Cidadão</option>
                    <option value="institution">Instituição</option>
                </select>

                <label for="username">Usuário:</label>
                <input type="text" id="username" name="username" required>
                
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>
                
                <button type="submit" class="btn">Login</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Doações Solidárias. Todos os direitos reservados.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
