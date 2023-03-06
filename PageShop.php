<?php 

    include 'produtosDetalhes.php';
    $id = $_GET['id'];
    
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
<?php foreach($banco AS $dados) if($dados['id']==$id){ ?>
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
            <h2><strong><?php echo $dados['nome'] ?></strong></h2>
        </p>
        <img width="15%" src="images/linha.svg" alt="">
    </div>

    <!-- Descrição do produto -->
    <!-- Imagem do produto via ID -->
    <div class="produtDescri">
        <div class="produtDescriimg">
            <a href="PageShop.php?id=<?php echo $dados['id'] ?>">
                <img src="<?php echo $dados['imagem'] ?>" class="img-responsive img-rounded">
            </a>
        </div>
        <div class="produtDescritxt">
            <p><?php echo $dados['modelo'] ?></p>
            <img width="40%" src="images/linha.svg" alt="">
        </div>
        </div>
        <br>
        <h2><?php echo $dados['descri'] ?></h2>
        <hr width="100%">
<!-- informações do produto out -->
<?php }?>
</body>
</html>
<!-- .... - - .--. ... ---... -..-. -..-. --. .. - .... ..- -... .-.-.- -.-. --- -- -..-. ...- .. - --- .-. ..... ----- ..---  -->