<?php
// Inclui o arquivo de conexão com o banco de dados
include 'conexao.php';

// Verifica se houve erro de conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Consulta SQL para buscar todos os dados da tabela 'dados'
$sql = "SELECT id, nome, email FROM dados";
$result = $conn->query($sql);

if (!$result) {
    die("Erro na consulta SQL: " . $conn->error);
}

$dados = array();

if ($result->num_rows > 0) {
    // Converte cada linha de resultado em um array associativo
    while ($row = $result->fetch_assoc()) {
        $dados[] = $row; // Adiciona os dados no array
    }
}

// Retorna os dados em formato JSON
echo json_encode($dados);

// Fecha a conexão com o banco de dados
$conn->close();
?>
