<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 20</title>
</head>
<body>

  <a href="index.php">Voltar</a>
  <?php 
  echo "<h3>Exercício 20</h3>";
  echo "<p>Escreva um algoritmo que receba o valor de um produto e calcule um desconto de 7%, 
  exibindo para o usuário o valor original, o valor do desconto e o valor com o desconto.</p>";?>
  
  <p>Calculo de desconto: </p>
  <form action="" method="GET">
    <label for="">Digite o valor: </label><br>
    <input name="valor" type="text">
    <button type="submit">Enviar</button>
  </form>

  <?php
  $valor = $_GET['valor'];
  $desconto = ($valor * 0.07);
  $valorFinal = $valor - $desconto;

  echo "Valor informado: R$" . number_format($valor, 2) . ".<br>";
  echo "Valor do desconto: R$" . number_format($desconto, 2). ".<br>";
  echo "Valor final: R$" . number_format($valorFinal, 2). "."; 


  ?>

</body>
</html>