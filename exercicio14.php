<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 14</title>
</head>
<body>

  <a href="index.php">Voltar</a>
  <?php 
  echo "<h3>Exercício 14</h3>";
  echo "<p>Escreva um algoritmo que receba um valor, calcule e mostre para usuário 15% deste valor.</p>";?>
  
  <form action="" method="GET">
    <label for="">Digite um valor númerico: </label><br>
    <input name="valor" type="text">
    <br>
    <button type="submit">Enviar</button>
  </form>

  <?php
  
  $valor = $_GET['valor'];
  $resultado = ($valor * 0.15);
  echo "15% de " . $valor . " é " . $resultado . ".";


  ?>

</body>
</html>

