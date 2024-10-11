<?php
session_start();

// Destrói todas as sessões
session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deslogado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            padding-top: 50px;
        }
        .message {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            display: inline-block;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
    </style>
    <script>
        // Redireciona após 5 segundos
        setTimeout(function() {
            window.location.href = '../pages/login.html';
        }, 5000);
    </script>
</head>
<body>
    <div class="message">
        <h2>Você foi deslogado!!</h2>
        <p>Você será redirecionado para a página de login em 5 segundos.</p>
    </div>
</body>
</html>
