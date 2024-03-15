<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 18</title>
</head>
<body>

  <a href="index.php">Voltar</a>
  <?php 
  echo "<h3>Exercício 18</h3>";
  echo "<p>Escreva um algoritmo que leia a altura e o peso de uma pessoa, calcule o seu IMC (Índice de Massa Corporal) e exiba para o usuário.</p>";?>
  
  <p>Calculo de IMC: </p>
  <form action="" method="GET">
    <label for="">Digite a sua altura: </label><br>
    <input name="altura" type="text">
    <br>
    <label for="">Digite o seu peso: </label><br>
    <input name="peso" type="text">
    <br>
    <button type="submit">Enviar</button>
  </form>

  <?php

    if (isset($_GET['altura']) && isset($_GET['peso'])){
      $altura = $_GET['altura'];
      $peso = $_GET['peso'];
      $imc = $peso / (pow($altura,2));
      
      if ($imc < 18.5) {
        echo "O seu IMC é " . number_format($imc,2) . "! Abaixo do peso.";
      } else if ($imc >= 18.5 && $imc < 24.9) {
        echo "O seu IMC é " . number_format($imc,2) . "! Peso ideal (Parabéns).";
      } else if ($imc >= 24.9 && $imc < 29.9) {
        echo "O seu IMC é " . number_format($imc,2) . "! Levemente acima do peso.";
      } else if ($imc >= 29.9 && $imc < 34.9) {
        echo "O seu IMC é " . number_format($imc,2) . "! Obesidade grau I.";
      } else if($imc >= 34.9 &&  $imc < 39.9) {
        echo "O seu IMC é " . number_format($imc,2) . "! Obesidade grau II (severa).";
      } else {
        echo "O seu IMC é " . number_format($imc,2) . "! Obesidade grau III (mórbida).";
      }
    }




  ?>

</body>
</html>

