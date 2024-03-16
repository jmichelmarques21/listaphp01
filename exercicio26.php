<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 26</title>
</head>
<body>

  <a href="index.php">Voltar</a>
  <?php 
  echo "<h3>Exercício 26</h3>";
  echo "<p>Escreva um algoritmo que receba de entrada a distância total (em km) percorrida por um automóvel e 
  a quantidade de combustível (em litros) consumida para percorrê-la, calcule e imprima o consumo médio de
  combustível. Fórmula: Consumo médio = Km / litros</p>";?>
  
  <p>Calculo de consumo de combustível: </p>
  <form action="" method="GET">
    <label for="">Insira a distância total percorrida (km): </label><br>
    <input name="distancia" type="text">
    <br>
    <label for="">Insira a quantidade consumida de combustível (l): </label><br>
    <input name="litros" type="text">
    <br>
    <button type="submit">Enviar</button>
  </form>

  <?php
  
  if(isset($_GET['distancia']) && isset($_GET['litros'])){
    $distancia = $_GET['distancia']; 
    $litros = $_GET['litros'];
    $consumo = $distancia / $litros;
    echo "Distância percorrida: " . $distancia . " km.<br>";
    echo "Litros consumidos: " . $litros . " l.<br>";
    echo "Consumo médio: " . $consumo . " km/l.";
  }


  ?>

</body>
</html>

