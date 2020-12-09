<meta  http-equiv="Refresh" content="1;URL=index.php">
<?php
//conecta e seleciona banco
include ("conecta.php");

$v_id = $_GET['codigo'];
$sql = mysqli_query($conexao, "DELETE FROM clientes WHERE id =  ".$v_id."");
mysqli_query($conexao,$sql);
echo "<h1>Registro excluido com sucesso</h1>";
?>