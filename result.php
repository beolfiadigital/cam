<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Busca</title>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .result-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 20px auto;
        }
        .product {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .product img {
            max-width: 100%;
            border-radius: 10px;
        }
        .product-description {
            margin: 20px 0;
        }
        .unique-code {
            font-size: 14px;
            color: #555;
        }
        .cart-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            text-align: center;
        }
        .cart-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <?php
        // Verificar se o código único foi enviado
        if(isset($_GET['unique_code'])) {
            // Recuperar o código único do formulário
            $unique_code = $_GET['unique_code'];

            // Conectar ao banco de dados
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "thedus";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verificar a conexão
            if ($conn->connect_error) {
                die("Erro na conexão com o banco de dados: " . $conn->connect_error);
            }

            // Consulta SQL para buscar o post com o código único
            $sql = "SELECT * FROM produtos WHERE unique_code = '$unique_code'";
            $result = $conn->query($sql);

            // Verificar se algum resultado foi encontrado
            if ($result->num_rows > 0) {
                // Exibir os resultados
                while($row = $result->fetch_assoc()) {
                    echo "<div class='product'>";
                    echo "<h2>Post Encontrado:</h2>";
                    echo "<img src='" . $row['product_image'] . "' alt='Imagem do Produto'>";
                    echo "<div class='product-description'>Descrição: " . $row['product_description'] . "</div>";
                    echo "<div class='unique-code'>Código Único: " . $row['unique_code'] . "</div>";
                    if (!empty($row['affiliate_link'])) {
                        echo "<a href='" . $row['affiliate_link'] . "' class='cart-button' target='_blank'>Visitar Página</a>";
                    } else {
                        echo "<button class='cart-button'>Adicionar ao Carrinho</button>";
                    }
                    echo "</div>";
                }
            } else {
                echo "<p>Nenhum post encontrado com o código único fornecido.</p>";
            }

            // Fechar a conexão com o banco de dados
            $conn->close();
        }
        ?>
    </div>
</body>
</html>
