<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 23</title>
</head>
<body>

  <a href="index.php">Voltar</a>
  <?php 
  echo "<h3>Exercício 23</h3>";
  echo "<p>Escreva um algoritmo que receba três valores, calcule e apresente a área de um trapézio.</p>";?>
  
  <p>Calculo da área do trapézio: </p>
  <form action="" method="GET">
    <label for="">Digite o valor da base A: </label><br>
    <input name="baseA" type="text">
    <br>
    <label for="">Digite o valor da base B: </label><br>
    <input type="text name" name="baseB">
    <br>
    <label for="">Digite o valor da altura: </label><br>
    <input type="text" name="altura">
    <br>
    <button type="submit">Enviar</button>
  </form>

  <?php
  if (isset($_GET['baseA']) && isset($_GET['baseB']) && isset($_GET['altura'])) {
    $baseA = $_GET['baseA'];
    $baseB = $_GET['baseB'];
    $altura = $_GET['altura'];
    $areaT = ($baseA + $baseB) * ($altura / 2);
    echo "A área do trapézio é: " . number_format($areaT, 2) . ".";
  }


  ?>

</body>
</html>

