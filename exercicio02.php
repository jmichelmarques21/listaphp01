<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 02</title>
</head>
<body>

<a href="index.php">Voltar</a>
  <?php 
  echo "<h3>Exercício 02</h3>";
  echo "<p>Escreva um script que pede o raio de um círculo, e em seguida exiba o perímetro e área do círculo. Obs. procure por M_PI.</p>";?>
  
  <form action="" method="GET">
    <label for="">Digite o valor do raio de um círculo: </label>
    <input name="var" type="text">
    <button type="submit">Enviar</button>
  </form>
  <?php
  $raio = $_GET['var'];


  $perimetro = 2 * M_PI * $raio;
  $area = M_PI * pow($raio, 2);

  echo "<p>Raio: " . $raio;
  echo "<br>O perímetro do raio é: " . number_format($perimetro, 2);
  echo "<br>A área é: " . number_format($area, 2) . "</p>";





  ?>

</body>
</html>

