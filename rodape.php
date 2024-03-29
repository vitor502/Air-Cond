<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <link rel="icon" type="image/png" href="images/ar-condicionadop.cur"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
	<title>Document</title>
</head>
<body>
<div class="txtmain">
  <p><h2>Contato</h2></p>
  <img width="15%" src="images/linha.svg" alt="">
  </div>
  <div class="contat">
    <div class="contatoImagem">
      <img width="100%" src="images/ar_condicionado.png" alt="">
    </div>
    <div class="contatoForm">
    <article>
		<div class="ml mt" id="forma_contato">
			<div class="enderecoContato">
				<h4>
					Endereço: <br>
				</h4>
        Rua Palestina, 1440 - São Paulo - SP
			</div>
			<div class="conttato">
        <br>
				<h4>
					Entre em Contato:
					<br>
				</h4>
        Celular: (11) 937382713 <br>
					E-mail: vitorfs502@gmail.com
			</div>
		</div>
    <br>
		<div id="formulario" class="ml mt">
    <h4>
					Deixe sua Mensagem:
					<br>
				</h4>
			<form action="submit">
				<input style="background-color: transparent;" type="text" ng-model="nome" placeholder="Digite seu Nome" class="borda_c">
				<input style="background-color: transparent;" type="text" ng-model="email" placeholder="Digite seu E-mail" class="borda_c">
			</form>
			<form>
				<textarea style="background-color: transparent;" name="mensagem" id="mensagem" rows="1" cols="49" placeholder="Mensagem" class="mt borda_c"></textarea>
			</form>
			<a href="#"><button class="myButton" ><span>Enviar</span></button></a>
		</div>
	</article>
    </div>
    
  </div>
</body>
</html>