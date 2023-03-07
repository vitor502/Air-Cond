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
<body ng-app="meuApp" ng-controller="meuController" style="background-color: #fff;">
<?php foreach($banco AS $dados) if($dados['id']==$id){ ?>
<!-- Nav Bar in -->
    <header>
        <div class="logo">
        <a href="index.php"><img width="70" src="images/klipartz.com.png" alt=""></a>
        </div>

    <nav class="menu">
        <ul style="display: flex;">
        <li style="list-style: none; margin-right: 20px;"><a class="buttonBoxMenu" href="index.php">Home</a></li>
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

    <div class="produtDescri">
        <!-- Imagem do produto via ID in -->
        <div class="produtDescriimg">
            <a href="PageShop.php?id=<?php echo $dados['id'] ?>">
                <img class="produtDescriimg" src="<?php echo $dados['imagem'] ?>" class="img-responsive img-rounded">
            </a>
        </div>
        <!-- Imagem do produto via ID out -->
        <!-- Descrição do produto in -->
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
        <!-- Descrição do produto out-->
<!-- informações do produto out -->
<?php }?>

<!-- Contato in -->
    <div class="txtmain">
  <p><h2>Contato</h2></p>
  <img width="15%" src="images/linha.svg" alt="">
  </div>
  <div class="contat">
    <div class="contatoImagem">
      <img width="100%" src="images/ar_condicionado.png" alt="">
    </div>
    <form (ngSubmit)="submitForm()">

        <label for="text">Endereço:</label>
        <input type="text" id="endereco" [(ngModel)]="formData.name" name="endereco">

      <div>
        <input type="text" id="name" [(ngModel)]="formData.name" name="name" placeholder="Nome:">
      </div>
      <div>
        <input type="email" id="email" [(ngModel)]="formData.email" name="email" placeholder="Email:">
      </div>
      <div>
        <textarea id="message" [(ngModel)]="formData.message" name="message" placeholder="Mensagem:"></textarea>
      </div>
      <button type="submit">Enviar</button>
    </form>
    
  </div>
<!-- Contato out -->
</body>
</html>
<!-- .... - - .--. ... ---... -..-. -..-. --. .. - .... ..- -... .-.-.- -.-. --- -- -..-. ...- .. - --- .-. ..... ----- ..---  -->