<?php
session_start();

// Verifica se o usuário está logado
include_once "verifica.php";
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALUNOS</title>
    <link rel="stylesheet" href="dashboard.css"> 
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="navbar-content">
                <div class="user-info">
                    <span class="user-icon">👤</span> 
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
    </header>

    <div class="container-aluno">

        <h2>Pesquise um Aluno</h2>
  
    </div>


</body>

</html>
