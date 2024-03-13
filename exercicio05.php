<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 05</title>
</head>
<body>

  <a href="index.php">Voltar</a>
  <?php 
  echo "<h3>Exercício 05</h3>";
  echo "<p>Faça um script que converta metros para centímetros.</p>";?>
  
  <form action="" method="GET">
    <label for="">Digite a medida em metros: </label>
    <input name="metros" type="text">
    <br>
    <button type="submit">Enviar</button>
  </form>

  <?php
  $metros = $_GET['metros'];
  $cm = $metros * 100;

  echo "A medida de $metros m em centímetros é de " . number_format($cm,2, ",", ".") . " cm." 


  ?>

</body>
</html>

