<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 15</title>
</head>
<body>

  <a href="index.php">Voltar</a>
  <?php 
  echo "<h3>Exercício 15</h3>";
  echo "<p>Escreva um algoritmo que receba um valor, calcule e mostre para o usuário 5% e 50% deste valor.</p>";?>
  
  <form action="" method="GET">
    <label for="">Digite um valor númerico: </label><br>
    <input name="valor" type="text">
    <br>
    <button type="submit">Enviar</button>
  </form>

  <?php
  
  $valor = $_GET['valor'];
  $val5 = ($valor * 0.05);
  $val50 = ($valor * 0.50);
  echo "5% de " . $valor . " é " . $val5 . ".";
  echo "<br>50% de " . $valor . " é " . $val50 . "."; 


  ?>

</body>
</html>

