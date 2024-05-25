<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Vitrine de Produtos</title>
</head>
<body>

<div id="product-list">
    <?php
    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "root"; // Nome de usuário padrão do MySQL no XAMPP é "root"
    $password = ""; // Senha padrão do MySQL no XAMPP é deixada em branco
    $dbname = "thedus"; // Substitua "seu_banco_de_dados" pelo nome do banco de dados que você criou
    
    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verifica a conexão
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }
    
    // Consulta SQL para selecionar todos os produtos
    $sql = "SELECT * FROM produtos";
    $result = $conn->query($sql);

    // Verifica se há produtos na matriz $products
    if ($result->num_rows > 0) {
    // Itera sobre os produtos e exibe cada um na vitrine
    while ($row = $result->fetch_assoc()) {
        echo '<div class="product">';
        echo '<img src="' . $row['product_image'] . '" alt="Imagem do Produto">';
        echo '<div class="product-description">' . $row['product_description'] . '</div>';
        
        // Verifica se há link de afiliado e exibe como botão
        if (!empty($row['affiliate_link'])) {
            echo '<a href="' . $row['affiliate_link'] . '" class="cart-button" target="_blank">Comprar Agora</a>';
        } else {
            // Se não houver link de afiliado, exibe apenas o botão padrão
            echo '<button class="cart-button">Adicionar ao Carrinho</button>';
        }
        
        echo '</div>';
    }
} else {
    echo "Nenhum produto encontrado.";
}

    
    // Fecha a conexão
    $conn->close();
    ?>
</div><br><br><br><br><br><br><br><br>


<script type="text/javascript">var key = "5b973c4534de40dc20c89f154a78fa6a";</script>
<script type="text/javascript" src="https://abrir.link/script.js"></script>
</body>
</html>