<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 06</title>
</head>
<body>

  <a href="index.php">Voltar</a>
  <?php 
  echo "<h3>Exercício 06</h3>";
  echo "<p>Faça um script que calcule a área de um quadrado, em seguida mostre o dobro desta área para o usuário.</p>";?>
  
  <form action="" method="GET">
    <label for="">Digite a medida do lado do quadrado: </label>
    <input name="ladoQuadrado" type="text">
    <br>
    <button type="submit">Enviar</button>
  </form>

  <?php
  $ladoQuadrado = $_GET['ladoQuadrado'];
  $area = pow($ladoQuadrado, 2);
  $dobro = $area * 2;

  echo "O dobro da área de um quadrado com lado " . $ladoQuadrado . " é de " . $dobro . "."; 


  ?>

</body>
</html>

