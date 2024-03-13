<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 07</title>
</head>
<body>

  <a href="index.php">Voltar</a>
  <?php 
  echo "<h3>Exercício 07</h3>";
  echo "<p>Faça um script que pergunte quanto você ganha por hora e o número de horas trabalhadas no mês. 
  Calcule e mostre o total do seu salário no referido mês.</p>";?>
  
  <form action="" method="GET">
    <label for="">Quanto você ganha por hora? </label>
    <input name="valorHora" type="text">
    <br>
    <label for="">Qual é o número de horas trabalhadas nesse mês? </label>
    <input name="numHoras" type="text">
    <br>
    <button type="submit">Enviar</button>
  </form>

  <?php
  
  if(isset($_GET['valorHora']) && isset($_GET['numHoras'])) {
    $valorHora = $_GET['valorHora'];
    $numHoras = $_GET['numHoras'];
    $salario = $valorHora * $numHoras;
    echo "Total do salário para o referido mês: R$" . number_format($salario, 2) . ".";
  }



  ?>

</body>
</html>

