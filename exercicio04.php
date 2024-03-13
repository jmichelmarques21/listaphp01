<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 04</title>
</head>
<body>
<a href="index.php">Voltar</a>

  <?php 
  echo "<h3>Exercício 04</h3>";
  echo "<p>Faça um script que peça 3 notas de um aluno e mostre sua média.</p>";?>
  
  <form action="" method="GET">
    <label for="">Digite a primeira nota: </label>
    <input name="nota1" type="text">
    <br>
    <label for="">Digite a segunda nota: </label>
    <input name="nota2" type="text">
    <br>
    <label for="">Digite a terceira nota </label>
    <input name="nota3" type="text">
    <br>
    <button type="submit">Enviar notas</button>
  </form>
  <?php

    if(isset($_GET['nota1']) && isset($_GET['nota2']) && isset($_GET['nota3'])){
      $nota1 = $_GET['nota1'];
      $nota2 = $_GET['nota2'];
      $nota3 = $_GET['nota3'];
      $media = ($nota1 + $nota2 + $nota3) / 3;
      echo "A média das notas é: " . number_format($media, 2) . ".";
    }





  ?>

</body>
</html>

