<?php
session_start();

// Verifica se o usuário está logado
include_once "verifica.php";

echo "usuario".$_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO ALUNO</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
<nav class="navbar">
    <div class="navbar-content">
        <div class="user-info">
            <span class="user-icon">👤</span> <!-- Ícone do usuário -->
            <span class="username"><?php echo $_SESSION['usuario']; ?></span>
        </div>
        <div class="navbar-links">
            <a href="ALUNO.php">ALUNOS</a>
            <a href="TREINOS.php">TREINOS</a>
            <a href="FINANCEIRO.php">FINANCEIRO</a>
            <a href="CADASTRO_ALUNO.php">CADASTRO ALUNO</a>
        </div>
        <div class="logout">
            <a href="logout.php" class="logout-button">Sair</a>
        </div>
    </div>
 </nav>
</body>
</html>
