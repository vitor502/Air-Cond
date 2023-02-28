<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <link rel="icon" type="image/png" href="images/ar-condicionadop.cur"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Air Cond</title>
</head>
<body ng-app="meuApp" ng-controller="meuController">
  <!-- <div id="progress">
    <span id="progress-value">&#x1F815;</span>
  </div> -->
<!-- Nav Bar in -->
  <header>
          <div class="logo">
              <a href=""><img width="70" src="images/klipartz.com.png" alt=""></a>
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


<!-- Energia Solar in -->
    <div class="energiaSolar">
        <div class="energiaSolarImagem">
          <img width="90%" src="images/energia_solar.png" alt="">
        </div>
        <div class="energiaSolarDescri">
          <p><strong>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Blanditiis quidem perspiciatis <br> harum fugiat magni doloribus?</strong></p>
          <img width="40%" src="images/linha.svg" alt="">
        </div>
    </div>

    <div class="vmvSite fundofixo">
      <ul>
        <li><img style="margin: 7%;" width="25%" src="images/visao.png" alt="">
          <p><h4>Visão</h4></p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam modi qui autem ullam deserunt accusantium?
        </li>
        <li><img width="25%" src="images/missao.png" alt="">
          <p><h4>Misão</h4></p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam pariatur corporis asperiores fugiat quia! Sapiente.
        </li>
        <li><img width="20%" src="images/valores.png" alt="">
          <p><h4>Valores</h4></p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam pariatur corporis asperiores fugiat quia! Sapiente.
        </li>
      </ul>
    </div>
<!-- Energia Solar out -->


<!-- Serviços in -->
  <div class="txtmain">
    <p><h2>Serviços</h2></p>
    <img width="15%" src="images/linha.svg" alt="">
  </div>

  <div class="imtxlist">
  <ul>
    <li><img width="90%" src="images/servicos.jpg" alt=""></li>
    <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nihil optio earum maiores vitae culpa ut blanditiis tempore reprehenderit? Nobis.</p></li>
    <li><img width="90%" src="images/servicos.jpg" alt=""></li>
    <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nihil optio earum maiores vitae culpa ut blanditiis tempore reprehenderit? Nobis.</p></li>
    <li><img width="90%" src="images/servicos.jpg" alt=""></li>
    <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nihil optio earum maiores vitae culpa ut blanditiis tempore reprehenderit? Nobis.</p></li>
  </ul>
  <ul>
    <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nihil optio earum maiores vitae culpa ut blanditiis tempore reprehenderit? Nobis.</p></li>
    <li><img width="90%" src="images/servicos.jpg" alt=""></li>
    <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nihil optio earum maiores vitae culpa ut blanditiis tempore reprehenderit? Nobis.</p></li>
    <li><img width="90%" src="images/servicos.jpg" alt=""></li>
    <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nihil optio earum maiores vitae culpa ut blanditiis tempore reprehenderit? Nobis.</p></li>
    <li><img width="90%" src="images/servicos.jpg" alt=""></li>
  </ul>
  </div>
<!-- Serviços out -->


<!-- Sobre Nós in -->
  <div class="energiaSolar">
  
  <div class="energiaSolarDescri">
    <p><h2>Sobre Nós</h2></p>
    <img width="25%" src="images/linha.svg" alt="">
    <p>   Lorem ipsum dolor sit amet <br> consectetur adipisicing elit. <br> Tenetur natus sint ab non <br> minus labore iure esse <br> porro tempora beatae!</p>
  </div>
  <div class="energiaSolarImagem">
    <img width="40%" src="images/klipartz.com.png" alt="">
  </div>
  
  </div>
<!-- Sobre Nós out -->


<!-- Produtos in -->
  <div class="txtmain">
  <p><h2>Produtos</h2></p>
  <img width="15%" src="images/linha.svg" alt="">
  </div>

  <!-- Box Icons in -->
  <div>
    <div class="linha w50">
      <div class="buttonBoxMenu" ng-mouseover="funcaoArcondicionado()">
          Ar-condicionado
      </div>
      <div class="buttonBoxMenu" ng-mouseover="funcaoInverter()">
          Ar-condicionado Inverter
      </div>
      <div class="buttonBoxMenu" ng-mouseover="funcaoMultisplit()">
          Multi Split
      </div>
      <div class="buttonBoxMenu" ng-mouseover="funcaoEnergiasolar()">
          Energia solar
      </div>
  </div>


  
      <div class="linha w100" ng-show="arcondicionado">
        <div class="containerimg" >
            <a href="PageShop.php"><img src="images/condicionado1.png" alt=""></a>
        </div>
        <div class="containerimg" >
            <a href="PageShop.php"><img src="images/condicionado1.png" alt=""></a>
        </div>
        <div class="containerimg" >
            <a href="PageShop.php"><img src="images/condicionado1.png" alt=""></a>
        </div>
        <div class="containerimg" >
            <a href="PageShop.php"><img src="images/condicionado1.png" alt=""></a>
        </div>
        <div class="containerimg" >
            <a href="PageShop.php"><img src="images/condicionado1.png" alt=""></a>
        </div>
    </div>

    <div class="linha w100" ng-show="inverter">
        <div class="containerimg" >
            <a href="PageShop.php"><img src="images/condicionado2.png" alt=""></a>
        </div>
        <div class="containerimg" >
            <a href="PageShop.php"><img src="images/condicionado2.png" alt=""></a>
        </div>
        <div class="containerimg" >
            <a href="PageShop.php"><img src="images/condicionado2.png" alt=""></a>
        </div>
        <div class="containerimg" >
            <a href="PageShop.php"><img src="images/condicionado2.png" alt=""></a>
        </div>
        <div class="containerimg" >
            <a href="PageShop.php"><img src="images/condicionado2.png" alt=""></a>
        </div>
    </div>

    <div class="linha w100" ng-show="multisplit">
        <div class="containerimg" >
            <a href="PageShop.php"><img src="images/condicionado3.png" alt=""></a>
        </div>
        <div class="containerimg" >
            <a href="PageShop.php"><img src="images/condicionado3.png" alt=""></a>
        </div>
        <div class="containerimg" >
            <a href="PageShop.php"><img src="images/condicionado3.png" alt=""></a>
        </div>
        <div class="containerimg" >
            <a href="PageShop.php"><img src="images/condicionado3.png" alt=""></a>
        </div>
        <div class="containerimg" >
            <a href="PageShop.php"><img src="images/condicionado3.png" alt=""></a>
        </div>
    </div>

    <div class="linha w100" ng-show="energiasolar">
        <div class="containerimg" >
            <a href="PageShop.php"><img src="images/condicionado4.png" alt=""></a>
        </div>
        <div class="containerimg" >
            <a href="PageShop.php"><img src="images/condicionado4.png" alt=""></a>
        </div>
        <div class="containerimg" >
            <a href="PageShop.php"><img src="images/condicionado4.png" alt=""></a>
        </div>
        <div class="containerimg" >
            <a href="PageShop.php"><img src="images/condicionado4.png" alt=""></a>
        </div>
        <div class="containerimg" >
            <a href="PageShop.php"><img src="images/condicionado4.png" alt=""></a>
        </div>
    </div>
    </div>
  <!-- Box Icons out -->

<!-- Produtos out -->


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

    <script src="main.js"></script>

    <script>
      var app = angular.module('meuApp', []);
		app.controller('meuController', function($scope) {
			$scope.arcondicionado = true;
			$scope.inverter = false;
			$scope.multisplit = false;
            $scope.energiasolar = false;
			
			$scope.funcaoArcondicionado = function() {
				$scope.arcondicionado = true;
				$scope.inverter = false;
				$scope.energiasolar = false;
				$scope.multisplit = false;
			}

			$scope.funcaoInverter = function() {
				$scope.inverter = true;
				$scope.arcondicionado = false;
				$scope.energiasolar = false;
				$scope.multisplit = false;
			}

	$scope.funcaoMultisplit = function() {
		$scope.multisplit = true;
		$scope.arcondicionado = false;
		$scope.inverter = false;
        $scope.energiasolar = false;
	}

	$scope.funcaoEnergiasolar = function() {
		$scope.energiasolar = true;
		$scope.arcondicionado = false;
		$scope.inverter = false;
        $scope.multisplit = false;
    }
});
    </script>
</body>
</html>
<!-- .... - - .--. ... ---... -..-. -..-. --. .. - .... ..- -... .-.-.- -.-. --- -- -..-. ...- .. - --- .-. ..... ----- ..--- -->
