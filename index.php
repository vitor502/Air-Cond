<?php 
  include 'produtosDetalhes.php';
?>
<!-- include do banco de dados  -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <link rel="icon" type="image/png" href="images/ArcoFrioBRAC.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Air Cond</title>
</head>
<body ng-app="meuApp" ng-controller="meuController">

<!-- Scroll Top in -->
  <!-- <div id="progress">
    <span id="progress-value">&#x1F815;</span>
  </div> -->
<!-- Scroll Top out -->

<!-- Nav Bar in -->
  <section id="">
    <?php include "menuPublico.php" ?>
  </section>  
<!-- Nav Bar out -->


<!-- Energia Solar in -->
  <section id="">
    <?php include "energiaSolar.php" ?>
  </section>  
<!-- Energia Solar out -->


<!-- Serviços in -->
  <section id="servicos">
    <?php include "servicos.php" ?>
  </section>  
<!-- Serviços out -->


<!-- Sobre Nós in -->
  <section id="sobreNos">
    <?php include "sobreNos.php" ?>
  </section>  
<!-- Sobre Nós out -->


<!-- Produtos in -->
  <section id="Produtos">
    <?php include "Produtos.php" ?>
  </section>  
<!-- Produtos out -->


<!-- Contato in -->
  <section id="rodape">
    <?php include "rodape.php" ?>
  </section>  
<!-- Contato out -->

<!-- Script JS in -->
  <script src="JS/main.js"></script>
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
<!-- Script JS out -->

</body>
</html>
<!-- .... - - .--. ... ---... -..-. -..-. --. .. - .... ..- -... .-.-.- -.-. --- -- -..-. ...- .. - --- .-. ..... ----- ..--- -->