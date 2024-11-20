<?php
session_start(); // Inicia a sessão

define("USER", "root");
define("PASS", "");

try {
    // Conexão ao banco de dados
    $pdo = new PDO('mysql:host=localhost;dbname=clientes', USER, PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conectado com sucesso!"; // Não é necessário mostrar isso em produção
} 
catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
    exit(); // Adiciona um exit() para parar a execução em caso de erro
}

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];

    // Consultar o banco de dados
    $stmt = $pdo->prepare("SELECT * FROM usuario WHERE usuario = :usuario");
    $stmt->bindParam(':usuario', $usuario);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verifica a senha
    if ($user && password_verify($pass, $user['pass'])) {
        // Autenticação bem-sucedida
        $_SESSION['usuario'] = $user['usuario'];
        header('Location: dashboard.php'); // Redireciona para uma página protegida
        exit();
    } else {
        // Autenticação falhou
        echo "<h1 class='error-message'>Usuário ou senha inválidos!</h1>";
        header('Refresh: 3; URL=login.php');
        exit(); // Adiciona um exit() após o redirecionamento
    }
} else {
    // Acesso indevido
    echo "<h1>Acesso indevido!!!</h1>";
    header('Refresh: 3; URL=login.php');
    exit(); // Adiciona um exit() após o redirecionamento
}

// Fecha a conexão
$pdo = null;
$stmt = null;
?>




