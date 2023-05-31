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
$nome = $_POST['nome'];
$informacoesCadastrais = $_POST['informacoesCadastrais'];
$endereco = $_POST['endereco'];

// Insere os dados no banco de dados
$sql = "INSERT INTO cadastro (nome, informacoesCadastrais, endereco) VALUES ('$nome', '$informacoesCadastrais', '$endereco')";

if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
