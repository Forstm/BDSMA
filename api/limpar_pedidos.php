<?php
// Inclui o arquivo de conexão com o banco de dados
include 'conexao.php';

// Consulta SQL para limpar a tabela de pedidos
$sql = "DELETE FROM pedidos";

if ($conn->query($sql) === TRUE) {
    echo "Todos os pedidos foram removidos com sucesso!";
} else {
    echo "Erro ao limpar os pedidos: " . $conn->error;
}

// Fecha a conexão
$conn->close();
?>
