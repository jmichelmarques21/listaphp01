<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 21</title>
</head>
<body>

  <a href="index.php">Voltar</a>
  <?php 
  echo "<h3>Exercício 21</h3>";
  echo "<p>Escreva um algoritmo que calcule e apresente o volume de uma caixa retangular por meio da seguinte fórmula: 
  volume = comprimento x largura x altura. </p>";?>
  
  <p>Calculo de volume: </p>
  <form action="" method="GET">
    <label for="">Digite o comprimento: </label><br>
    <input name="comprimento" type="text">
    <br>
    <label for="">Digite a largura: </label><br>
    <input type="text" name="largura">
    <br>
    <label for="">Digite a altura: </label><br>
    <input type="text" name="altura">
    <br>
    <button type="submit">Enviar</button>
  </form>

  <?php
  
  if(isset($_GET['comprimento']) && isset($_GET['largura']) && isset($_GET['altura'])){
    $comprimento = $_GET['comprimento'];
    $largura = $_GET['largura'];
    $altura = $_GET['altura'];
    $volume = $comprimento * $largura * $altura;
    echo "O volume é " . number_format($volume, 2) . ".";
  }


  ?>

</body>
</html>

