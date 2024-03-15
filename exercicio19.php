<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 19</title>
</head>
<body>

  <a href="index.php">Voltar</a>
  <?php 
  echo "<h3>Exercício 19</h3>";
  echo "<p>Escreva um algoritmo que receba um valor, calcule e mostre um desconto de 9%.</p>";?>
  
  <p>Calculo de desconto: </p>
  <form action="" method="GET">
    <label for="">Digite o valor: </label><br>
    <input name="valor" type="text">
    <button type="submit">Enviar</button>
  </form>

  <?php
  $valor = $_GET['valor'];

  $desconto = ($valor * 0.09);

  echo "O desconto de 9% sobre R$" . number_format($valor,2) . " é: R$" . number_format($desconto,2) . "<br>Total: R$" . number_format($valor - $desconto,2); 


  ?>

</body>
</html>

