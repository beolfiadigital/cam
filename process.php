<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexão com o banco de dados (substitua pelos seus dados de conexão)
    $servername = "localhost";
    $username = "root"; // Nome de usuário padrão do MySQL no XAMPP é "root"
    $password = ""; // Senha padrão do MySQL no XAMPP é deixada em branco
    $dbname = "thedus"; // Substitua "seu_banco_de_dados" pelo nome do banco de dados que você criou
    
    // Cria conexão
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verifica a conexão
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }
    
    // Prepara os dados do formulário para inserção no banco de dados
    $affiliate_link = $_POST["affiliate-link"];
    $product_image = $_POST["product-image"];
    $product_description = $_POST["product-description"];
    
    // Gera um código único
    $unique_code = uniqid();

    // Insere os dados no banco de dados
    $sql = "INSERT INTO produtos (affiliate_link, product_image, product_description, unique_code) VALUES ('$affiliate_link', '$product_image', '$product_description', '$unique_code')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Produto salvo com sucesso!";
    } else {
        echo "Erro ao salvar o produto: " . $conn->error;
    }
    
    // Fecha a conexão
    $conn->close();
}
?>
