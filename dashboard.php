<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Academia</title>
    <style>
        body { font-family: Arial; background: #f2f2f2; }
        .box { background: #fff; padding: 30px; margin: 100px auto; width: 400px; border-radius: 8px; box-shadow: 0 0 10px #ccc; text-align: center; }
        a { color: #007bff; text-decoration: none; }
    </style>
</head>
<body>
    <div class="box">
        <h2>Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</h2>
        <p>Você está logado no sistema da Academia.</p>
        <a href="logout.php">Sair</a>
    </div>
</body>
</html>
