<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=62bf69abbb34090012170f7f&product=sticky-share-buttons" async="async"></script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Black Tch - Melhores e mais confiáveis plataformas da internet que prometem pagar por tarefas e pesquisas online.</title>
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/basic.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="styl.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <style>
        .pagination {
            text-align: center;
            margin-top: 20px;
        }
        .pagination a {
            display: inline-block;
            margin: 0 5px;
            padding: 10px 15px;
            border: 1px solid #ddd;
            color: #333;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        .pagination a:hover,
        .pagination a.active {
            background-color: #4CAF50;
            color: white;
        }
        .unique-code {
            margin-top: 10px;
            font-size: 14px;
            color: #555;
        }
        .cart-button {
            margin-top: 10px; /* Espaçamento adicional acima do botão */
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">BLACK TCH</a>
            </div>
            <div class="header-right"></div>
        </nav>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li></li>
                    <li><a class="active-menu" href="index.php"><i class="fa fa-yelp"></i>Pagina Inicio</a></li>
                    <li>
                        <ul class="nav nav-second-level">
                        </ul>

                    </li>
                     <li><a href="#"><i class="fa fa-shopping-cart fa-fw"></i>Markting</a></li>

                    <li><a href="https://www.youtube.com/@black_tch"><i class="fa fa-sign-in "></i>Canal videos</a></li>
                    <li></li>

                    <li><a href="search.php"><i class="fa fa-tasks fa-fw"></i>Search codigo</a></li>
                    <li>
   
                    <li><a href="index.php"><i class="fa fa-flask"></i>Ser apoiador</a></li>

                </ul>

            </div>
        </nav>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Seu guia confiável para ganhar dinheiro online!</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="main-box mb-red">
                            <a href="sos/pix-caregando/index.html">
                                <i class="fa fa-dollar fa-5x"></i>
                                <h5>Ajudar Obra com Pix</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-box mb-dull">
                            <a href="#">
                                <i class="fa fa-dollar fa-5x"></i>
                                <h5>Metas de Arrecadação</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-box mb-pink">
                            <a href="sos/apoia-caregando/index.html">
                                <i class="fa fa-dollar fa-5x"></i>
                                <h5>Ser Apoiador</h5>
                            </a>
                        </div>
                    </div>
                </div>



                            <a href="#" class="list-group-item active">
                                <h4 class="list-group-item-heading">Sobre  &darr;</h4>
                                <p class="list-group-item-text" style="line-height: 30px;"><strong>
Aqui você encontra as melhores e mais confiáveis plataformas da internet.<br>
Nosso objetivo é testar, verificar e apresentar oportunidades reais de ganhos, para que
você possa aproveitar ao máximo o potencial.<br>
Desde métodos inovadores e plataformas diversificadas, nós exploramos todas
as formas possíveis de ganhar dinheiro online.<br>
<br>	&#9679; Para ontinuarmos trazendo conteúdo de qualidade e descobrindo novas oportunidades, sua contribuição
é fundamental. &hearts; &hearts;<br></strong>
								</p>  
								</a>   





                <br><br>
                <h4 class="page-head-line">Topicos &darr;</h4>
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

                    // Definir o número de produtos por página
                    $products_per_page = 4;

                    // Determinar a página atual
                    $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                    if ($current_page <= 0) {
                        $current_page = 1;
                    }

                    // Calcular o deslocamento
                    $offset = ($current_page - 1) * $products_per_page;

                    // Consulta SQL para contar o número total de produtos
                    $sql_total = "SELECT COUNT(*) as total FROM produtos";
                    $result_total = $conn->query($sql_total);
                    $row_total = $result_total->fetch_assoc();
                    $total_products = $row_total['total'];

                    // Calcular o número total de páginas
                    $total_pages = ceil($total_products / $products_per_page);

                    // Consulta SQL para selecionar os produtos para a página atual
                    $sql = "SELECT * FROM produtos LIMIT $products_per_page OFFSET $offset";
                    $result = $conn->query($sql);

                    // Verifica se há produtos
                    if ($result->num_rows > 0) {
                        // Itera sobre os produtos e exibe cada um na vitrine
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="product">';
                            echo '<img src="' . $row['product_image'] . '" alt="Imagem do Produto">';
                            echo '<div class="product-description">' . $row['product_description'] . '</div>';
                            echo '<div class="unique-code">' . $row['unique_code'] . '</div>';
                            if (!empty($row['affiliate_link'])) {
                                echo '<a href="' . $row['affiliate_link'] . '" class="cart-button" target="_blank">Visitar Página</a>';
                            } else {
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
                </div>
                <div class="pagination">
                    <?php
                    // Exibe a navegação de paginação
                    for ($page = 1; $page <= $total_pages; $page++) {
                        echo '<a href="index.php?page=' . $page . '">' . $page . '</a> ';
                    }
                    ?>
                </div>

                <br><br><br><br><br><br><br><br>
            </div>
        </div>
    </div>
    <div id="footer-sec">
        &copy; 2024 Black Tch | Plataforma Digital | Direitos <a href="http://www.binarytheme.com/" target="_blank">Reservados</a>
    </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>
