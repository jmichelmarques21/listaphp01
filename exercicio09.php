<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 09</title>
</head>
<body>

  <a href="index.php">Voltar</a>
  <?php 
  echo "<h3>Exercício 09</h3>";
  echo "<p>Faça um script que peça a temperatura em graus Celsius, transforme e mostre em graus Fahrenheit.</p>";?>
  
  <form action="" method="GET">
    <label for="">Digite uma temperatura em graus Celsius (Cº): </label>
    <input name="tempC" type="text">
    <br>
    <button type="submit">Enviar</button>
  </form>

  <?php
  
  $tempC = $_GET['tempC'];
  $tempF = ($tempC * 9/5) + 32;

  echo "A temperatura de " . number_format($tempC, 1) . "Cº em graus Fahrenheit é " . number_format($tempF,1) . "ºF."; 


  ?>

</body>
</html>

