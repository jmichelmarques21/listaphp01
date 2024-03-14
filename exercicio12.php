<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 12</title>
</head>
<body>

  <a href="index.php">Voltar</a>
  <?php 
  echo "<h3>Exercício 12</h3>";
  echo "<p>Escreva um algoritmo para somar dois números e multiplicar o resultado pelo primeiro número.</p>";?>
  
  <p>Digite dois números:</p> 
  <form action="" method="GET">
    <label for="">Digite o primeiro número: </label><br>
    <input name="num1" type="text">
    <br>
    <label for="">Digite o segundo número: </label><br>
    <input name="num2" type="text">
    <br>
    <button type="submit">Enviar</button>
  </form>

  <?php
  
  if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $resultado = ($num1 + $num2) * $num1;
    echo "O resultado é: " . $resultado;
  }
  


  ?>

</body>
</html>

