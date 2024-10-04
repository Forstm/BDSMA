<?php
include 'conexao.php';

$username = 'admin';
$password = password_hash('12345', PASSWORD_DEFAULT); // '12345' será a senha do usuário

$sql = "INSERT INTO usuarios (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Usuário criado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>
