<?php 

include "conn/connect.php";
$idProduto = $_GET['id_produto'];
$lista = $conn->query("select * from vw_tbprodutos where id_produto like '%$idProduto%'");
$row_produtos = $lista->fetch_assoc();
$num_linhas = $lista->num_rows;

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/ar-condicionadop.cur"/>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <title>Produtos</title>
</head>
<body ng-app="meuApp" ng-controller="meuController" style="background-color: rgba(218, 217, 216, 0.466);">

<!-- Nav Bar in -->
    <header>
        <div class="logo">
        <a href="index.php"><img width="70" src="images/klipartz.com.png" alt=""></a>
        </div>

    <nav class="menu">
        <ul style="display: flex;">
        <li style="list-style: none; margin-right: 20px;"><a class="buttonBoxMenu" href="#home">Home</a></li>
        <li style="list-style: none; margin-right: 20px;"><a class="buttonBoxMenu" href="#servicos">Serviços</a></li>
        <li style="list-style: none; margin-right: 20px;"><a class="buttonBoxMenu" href="#sobreNos">Sobre Nós</a></li>
        <li style="list-style: none; margin-right: 20px;"><a class="buttonBoxMenu" href="#produtos">Produtos</a></li>
        <li style="list-style: none;"><a class="buttonBoxMenu" href="#contato">Contato</a></li>
        </ul>
    </nav>
    </header>
<!-- Nav Bar out -->

<!-- informações do produto in -->
    <!-- Nome do produto via ID -->
    <div class="txtprodut">
        <p>
            <h2><strong><?php echo $row_produtos['descri_produto'] ?></strong></h2>
        </p>
        <img width="15%" src="images/linha.svg" alt="">
    </div>

    <!-- Descrição do produto -->
    <!-- Imagem do produto via ID -->
    <div class="produtDescri">
        <div class="produtDescriimg">
            <a href="produto_detalhes.php?id_produto=<?php echo $row_produtos['id_produto'] ?>">
                <img src="images/<?php echo $row_produtos['imagem_produto'] ?>" class="img-responsive img-rounded">
            </a>
        </div>
        <div class="produtDescritxt">
            <p>Ar Condicionado Split 12000 BTUs <br> Midea Springer Inverter Frio <br> AirVolution 42AFVCG/38TVCB 220V</p>
            <img width="40%" src="images/linha.svg" alt="">
        </div>
        </div>
        <br>
        <h2>Descrição do Produto:</h2>
        <hr width="100%">
<!-- informações do produto out -->

</body>
</html>
<!-- .... - - .--. ... ---... -..-. -..-. --. .. - .... ..- -... .-.-.- -.-. --- -- -..-. ...- .. - --- .-. ..... ----- ..---  -->