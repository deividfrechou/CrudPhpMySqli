<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

<?php
//conecta e seleciona banco
include ("conecta.php");
$v_id = $_GET['codigo'];
$query = mysqli_query($conexao, "SELECT * FROM clientes WHERE id =  ".$v_id."") or die(mysqli_error($cx));

$row = mysqli_fetch_array($query);
?>
<div class="container">
<div class="card text-white bg-success mb-3" style="max-width: 18rem">
  <div class="card-header">
  <?php   echo "Codigo de Identificação: ".$row['id']; ?>
  </div>
  <div class="card-body">
    <h5 class="card-title">
    <?php  echo $row['nome']."<br><br>";?>
    </h5>
    <p class="card-text">
    <?php  echo "Telefone: ".$row['telefone']."<br><br>";?>
    <?php  echo "E-mail:".$row['email']."<br><br>";?>

    <a href='index.php'><button type="button" class="btn btn-warning">Voltar</button></a>
    </p>
  </div>
</div>
</div>
</body>
</html>