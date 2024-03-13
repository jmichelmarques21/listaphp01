<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 08</title>
</head>
<body>

  <a href="index.php">Voltar</a>
  <?php 
  echo "<h3>Exercício 08</h3>";
  echo "<p>Faça um script que peça a temperatura em graus Fahrenheit, transforme e mostre a temperatura em graus Celsius. C = (5 * (F-32) / 9).</p>";?>
  
  <form action="" method="GET">
    <label for="">Digite uma temperatura em graus Fahrenheit (Fº): </label>
    <input name="tempF" type="text">
    <br>
    <button type="submit">Enviar</button>
  </form>

  <?php
  
  $tempF = $_GET['tempF'];
  $tempC = (5 * ($tempF - 32) / 9);

  echo "A temperatura de " . number_format($tempF, 1) . "Fº em graus Celsius é " . number_format($tempC,1) . "ºC."; 


  ?>

</body>
</html>

