<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 16</title>
</head>
<body>

  <a href="index.php">Voltar</a>
  <?php 
  echo "<h3>Exercício 16</h3>";
  echo "<p>Escreva um algoritmo que leia dois números, calcule o quadrado de cada um, some os quadrados e mostre o resultado.</p>";?>
  
  <p>Digite dois números: </p>
  <form action="" method="GET">
    <label for="">Digite o primeiro número: </label><br>
    <input name="num1" type="text">
    <br>
    <label for="">Digite o segundo valor: </label><br>
    <input name="num2" type="text">
    <br>
    <button type="submit">Enviar</button>
  </form>

  <?php
  
  if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $resultado = pow($num1, 2) + pow($num2, 2);
    echo "O quadrado de " . $num1 ." é: " . pow($num1, 2);
    echo "<br>O quadrado de " . $num2 . " é: " . pow($num2, 2);
    echo "<br>A soma dos quadrados de " . $num1 . " e " . $num2 . " é: " . $resultado;
  }


  ?>

</body>
</html>

