<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Inclui a conexão com o banco
    include 'conexao.php';

    $nome = $_POST['nome'];
    $setor = $_POST['setor'];
    $proteina = $_POST['proteina'];

    // Prepara o SQL para inserir os dados
    $sql = "INSERT INTO pedidos (nome, setor, proteina) VALUES ('$nome', '$setor', '$proteina')";

    // Executa a query e verifica se deu certo
    if ($conn->query($sql) === TRUE) {
        echo "Pedido inserido com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    // Fecha a conexão
    $conn->close();
}
?>
