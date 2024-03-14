<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 13</title>
</head>
<body>

  <a href="index.php">Voltar</a>
  <?php 
  echo "<h3>Exercício 13</h3>";
  echo "<p>Escreva um algoritmo que leia três números nas variáveis Val1, Val2 e Val3, calcule sua média na variável media e 
        exiba para o usuário o resultado.</p>";?>
  
  <p>Digite três números:</p> 
  <form action="" method="GET">
    <label for="">Digite o primeiro número: </label><br>
    <input name="Val1" type="text">
    <br>
    <label for="">Digite o segundo número: </label><br>
    <input name="Val2" type="text">
    <br>
    <label for="">Digite o terceiro número: </label><br>
    <input name="Val3" type="text">
    <br>
    <button type="submit">Enviar</button>
  </form>

  <?php
  
  if (isset($_GET['Val1']) && isset($_GET['Val2']) && isset($_GET['Val3'])) {
    $Val1 = $_GET['Val1'];
    $Val2 = $_GET['Val2'];
    $Val3 = $_GET['Val3'];
    $media = ($Val1 + $Val2 + $Val3) / 3;
    echo "Primeiro número: " . $Val1;
    echo "<br>Segundo número: " . $Val2;
    echo "<br>Terceiro número: " . $Val3;
    echo "<br>A média dos três números é: " . $media . ".";
  }
  


  ?>

</body>
</html>

