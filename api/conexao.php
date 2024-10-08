<?php
$servername = "localhost";
$username = "root"; // O usuário padrão do XAMPP é 'root'
$password = ""; // Sem senha por padrão
$dbname = "bdsma"; // Nome do banco de dados que você criou

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
//echo "Conectado com sucesso!";
?>