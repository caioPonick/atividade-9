<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header('Location: dashboard.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Academia</title>
    <style>
        body { font-family: Arial; background: #f2f2f2; }
        .login-box { background: #fff; padding: 30px; margin: 100px auto; width: 300px; border-radius: 8px; box-shadow: 0 0 10px #ccc; }
        input { width: 100%; padding: 10px; margin: 10px 0; }
        button { width: 100%; padding: 10px; background: #007bff; color: #fff; border: none; border-radius: 4px; }
        .erro { color: red; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login Academia</h2>
        <?php if (isset($_GET['erro'])): ?>
            <div class="erro">
                <?php
                if ($_GET['erro'] == 1) {
                    echo 'Usuário ou senha inválidos!';
                } elseif ($_GET['erro'] == 2) {
                    echo 'Erro ao cadastrar usuário!';
                }
                ?>
            </div>
        <?php endif; ?>
        <form action="autentica.php" method="post">
            <input type="text" name="username" placeholder="Usuário" required autofocus>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
