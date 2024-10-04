<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'conexao.php'; // Arquivo de conexão com o banco de dados

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta para verificar o usuário
    $sql = "SELECT * FROM usuarios WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verifica se a senha digitada corresponde à senha armazenada
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            echo "Login bem-sucedido!";
            // Redireciona para a página de sucesso (dashboard)
            header("Location: ../pages/inserir_consulta.html");
            exit();
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }

    $conn->close();
}
?>
