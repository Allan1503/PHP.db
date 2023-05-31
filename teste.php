<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "meudb";

// Cria a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obtém os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// Insere os dados no banco de dados
$sql = "INSERT INTO contatos (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
