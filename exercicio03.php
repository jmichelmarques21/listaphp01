<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 03</title>
</head>
<body>
<a href="index.php">Voltar</a>

  <?php 
  echo "<h3>Exercício 03</h3>";
  echo "<p>Faça um script que peça dois números e imprima a soma.</p>";?>
  
  <form action="" method="GET">
    <label for="">Digite o primeiro número: </label>
    <input name="num1" type="text">
    <label for="">Digite o segundo número: </label>
    <input name="num2" type="text">
    <br>
    <button type="submit">Enviar</button>
  </form>

  <?php
  if(isset($_GET['num1']) && isset($_GET['num2'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $soma = $num1 + $num2;
    echo "<br>A soma entre os números $num1 e $num2 é: " . $soma . ".";
  } else {
    echo "Por favor insira os números.";
  }





  ?>

</body>
</html>

