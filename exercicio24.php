<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 24</title>
</head>
<body>

  <a href="index.php">Voltar</a>
  <?php 
  echo "<h3>Exercício 24</h3>";
  echo "<p>.Escreva um algoritmo que leia 3 notas de um aluno e calcule a média final deste aluno, 
  considerando que a média é ponderada, ou seja, o peso das notas são, respectivamente, 2, 3 e 5.</p>";?>
  
  <p>Calculo da média ponderada: </p>
  <form action="" method="GET">
    <label for="">Digite a primeira nota: </label><br>
    <input name="nota1" type="text">
    <br>
    <label for="">Digite a segunda nota: </label><br>
    <input type="text name" name="nota2">
    <br>
    <label for="">Digite a terceira nota: </label><br>
    <input type="text" name="nota3">
    <br>
    <button type="submit">Enviar</button>
  </form>

  <?php
  if (isset($_GET['nota1']) && isset($_GET['nota2']) && isset($_GET['nota3'])) {
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];
    $mediaP = (($nota1 * 2) + ($nota2 * 3) + ($nota3 * 5)) / 10;
    echo "Primeira nota: " . number_format($nota1, 2) . ".<br>";
    echo "Segunda nota: " . number_format($nota2, 2) . ".<br>";
    echo "Terceira nota: " . number_format($nota3, 2) . ".<br>";
    echo "Média ponderada: " . number_format($mediaP, 2);
  }


  ?>

</body>
</html>

