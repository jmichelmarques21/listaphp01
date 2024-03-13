<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 01</title>
</head>
<body>

<a href="index.php">Voltar</a>
  <?php 
  echo "<h3>Exercício 01</h3>";
  echo "<p>Faça um script que peça um número e então mostre a mensagem “O número informado foi [número]</p>";?>
  
  <form action="" method="GET">
    <label for="">Digite um número: </label>
    <input name="var" type="text">
    <button type="submit">Enviar</button>
  </form>
  <?php
  $var = $_GET['var'];
  echo "<p>O número informado foi: " . $var . "<p>";





  ?>

</body>
</html>

