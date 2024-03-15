<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 25</title>
</head>
<body>

  <a href="index.php">Voltar</a>
  <?php 
  echo "<h3>Exercício 25</h3>";
  echo "<p>Escreva um algoritmo que receba o valor de um produto, acrescente 16% a esse valor, divida em 10 parcelas e m</p>";?>
  
  <form action="" method="GET">
    <label for="">Digite a o valor do produto: </label><br>
    <input name="valor" type="text">
    <button type="submit">Enviar</button>
  </form>

  <?php
  $valor = $_GET['valor'];
  $acrescimo = ($valor * 1.16) - $valor;
  $valorFinal = $valor + $acrescimo;
  $parcela = $valorFinal / 10;

  echo "Valor do produto: R$" . number_format($valor, 2) . ".<br>";
  echo "Valor do acréscimo (16%): R$" . number_format($acrescimo, 2) . ".<br>";
  echo "Valor da parcela: R$" . number_format($parcela, 2) . ".<br>";
  echo "Valor final: R$" . number_format($valorFinal, 2) . ".";


  ?>

</body>
</html>

