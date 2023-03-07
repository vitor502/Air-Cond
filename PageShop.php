<?php 
    include 'produtosDetalhes.php';
    $id = $_GET['id'];
?>
<!-- include do banco de dados  -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/ar-condicionadop.cur"/>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <link rel="stylesheet" href="CSS/style.css">    
    <title>Produtos</title>
</head>
<body ng-app="meuApp" ng-controller="meuController" style="background-color: #fff;">

<!-- extrutura de repetição do Banco de Dados via ID in -->
    <?php foreach($banco AS $dados) if($dados['id']==$id){ ?>

    <!-- Nav Bar in -->
        <?php include "menuPublico.php" ?>
    <!-- Nav Bar out -->

    <!-- informações do produto in -->

    <!-- Nome do produto via ID in -->
        <div class="txtprodut">
            <p><h2><strong><?php echo $dados['nome'] ?></strong></h2></p>
            <img width="15%" src="images/linha.svg" alt="">
        </div>
    <!-- Nome do produto via ID out -->

    <!-- Descrição do Produto in -->
        <div class="produtDescri">
        <!-- Imagem do produto via ID in -->
            <div class="produtDescriimg">
                <a href="PageShop.php?id=<?php echo $dados['id'] ?>">
                    <img class="produtDescriimg" src="<?php echo $dados['imagem'] ?>" class="img-responsive img-rounded">
                </a>
            </div>
        <!-- Imagem do produto via ID out -->

        <!-- Informação do produto in -->
            <div class="produtDescritxt">
                <p><h2><?php echo $dados['modelo'] ?></h2></p>
                <img width="40%" src="images/linha.svg" alt="">
            </div>
            </div>

            <div class="shop">
                <div class="produtDescriShop">
                    <p><h2>Descrição</h2></p>
                    <img width="15%" src="images/linha.svg" alt="">
                </div>
                
                <div class="saleProdut">
                    <a href="#" class="myButton">Comprar</a>
                    <h2><?php echo $dados['preco'] ?></h2>
                </div>
            </div>
            
            <hr width="100%">
            <?php echo $dados['descri'] ?>
        <!-- Informação do produto out-->
    <!-- Descrição do Produto out -->
    <?php }?>
<!-- extrutura de repetição do Banco de Dados via ID out -->

<!-- Contato in -->
    <?php include "rodape.php" ?>
<!-- Contato out -->

</body>
</html>
<!-- .... - - .--. ... ---... -..-. -..-. --. .. - .... ..- -... .-.-.- -.-. --- -- -..-. ...- .. - --- .-. ..... ----- ..---  -->