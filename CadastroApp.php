<?php
$servername = "localhost";
$username = "root";
$password = "";
$banco = "meudb";

// Cria a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $banco);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obtém os dados do formulário
$nome = $_POST['name'];
$info = $_POST['info'];
$address = $_POST['address'];

// Insere os dados no banco de dados
$sql = "INSERT INTO CadastroApp (nome, informacoes, endereco) VALUES ('$nome', '$info', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
