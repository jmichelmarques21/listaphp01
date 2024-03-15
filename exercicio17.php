<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 17</title>
</head>
<body>

  <a href="index.php">Voltar</a>
  <?php 
  echo "<h3>Exercício 17</h3>";
  echo "<p>Escreva um algoritmo que leia a velocidade de um objeto em m/s (metros por segundo), 
  calcule e exiba para o usuário a velocidade em km/h.</p>";?>
  
  <form action="" method="GET">
    <label for="">Digite a velocidade em m/s (metros por segundo): </label><br>
    <input name="mps" type="text">
    <br>
    <button type="submit">Enviar</button>
  </form>

  <?php
  
  $mps = $_GET['mps'];
  $kph = $mps * 3.6;
  echo "A velocidade de " . $mps . "m/s em km/h é de: " . $kph . ".";

  ?>

</body>
</html>

