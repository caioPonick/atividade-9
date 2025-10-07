<?php
session_start();
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $stmt = $conn->prepare('SELECT id, username, senha FROM usuarios WHERE username = ?');
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if ($senha === $row['senha']) {
            $_SESSION['usuario'] = $row['username'];
            header('Location: dashboard.php');
            exit();
        }
    }
    header('Location: index.php?erro=1');
    exit();
}
header('Location: index.php');
exit();
?>
