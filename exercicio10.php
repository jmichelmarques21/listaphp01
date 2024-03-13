<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 10</title>
</head>
<body>

  <a href="index.php">Voltar</a>
  <?php 
  echo "<h3>Exercício 10</h3>";
  echo "<p>Faça um script que peça 2 números inteiros e um número real. Calcule e mostre:
  <br> a. O produto do dobro do primeiro com metade do segundo.
  <br> b. A soma do triplo do primeiro com o terceiro.
  <br> c. O terceiro elevado ao cubo. </p>";?>
  
  <p>Digite dois números inteiros e um real: </p>
  <form action="" method="GET">
    <label for="">Digite o primeiro número inteiro: </label>
    <input name="nInt1" type="text">
    <br>
    <label for="">Digite o segundo número inteiro: </label>
    <input name="nInt2" type="text">
    <br>
    <label for="">Digite um número real: </label>
    <input name="nReal" type="text">
    <br>
    <button type="submit">Enviar</button>
  </form>

  <?php
  
  if(isset($_GET['nInt1']) && isset($_GET['nInt2']) && isset($_GET['nReal'])) {
    $nInt1 = $_GET['nInt1'];
    $nInt2 = $_GET['nInt2'];
    $nReal = $_GET['nReal'];
    $qA = ($nInt1 * 2) * ($nInt2 / 2);
    $qB = ($nInt1 * 3) + $nReal;
    $qC = pow($nReal, 3);
    echo "<p>O produto do dobro do primeiro com a metade do segundo: " . $qA;
    echo "<br>A soma do triplo do primeiro com o terceiro: " . $qB;
    echo "<br>O terceiro elevado ao cubo: " . $qC . "</p>";  
  }


  ?>

</body>
</html>

