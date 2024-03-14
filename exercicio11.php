<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 11</title>
</head>
<body>

  <a href="index.php">Voltar</a>
  <?php 
  echo "<h3>Exercício 11</h3>";
  echo "<p>Tendo como dados de entrada a altura de uma pessoa, construa um script que calcule seu peso ideal, usando a seguinte fórmula:
  <br>a. Para homens: (72.7*h) - 58
  <br>b. Para mulheres: (62.1*h) - 44.7
  </p>";?>
  
  <form action="" method="GET">
    <label for="">Digite a sua altura: </label><br>
    <input name="altura" type="text">
    <br>
    <label for="">Digite o seu gênero (F/M): </label><br>
    <input name="genero" type="text">
    <br>
    <button type="submit">Enviar</button>
  </form>

  <?php
  
  if (isset($_GET['altura']) && isset($_GET['genero'])) {
    $altura = $_GET['altura'];
    $genero = $_GET['genero'];
    if ($genero == 'M' || $genero == 'm') {
      $pesoIdeal = (72.7 * $altura) - 58;
      echo "O peso ideal para homens com a altura de " . number_format($altura, 2) . " é de " . number_format($pesoIdeal, 2) . "kg."; 
    } else if ($genero == 'F' || $genero == 'f') {
      $pesoIdeal = (62.1 * $altura) - 44.7;
      echo "O peso ideal para mulheres com a altura de " . number_format($altura, 2) . " é de " . number_format($pesoIdeal, 2) . "kg.";
    } else {
      echo "Dados inválidos, por favor revise e tente novamente.";
    }
  }
  


  ?>

</body>
</html>

