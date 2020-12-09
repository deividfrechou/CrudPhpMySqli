<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
<link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
<link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
</head>

<body>

<body>
<div class="container">
  <div class ="table-responsive">
  <br /><br />
  <h1 class="page-header">Relação de Clientes</h1>
  <br>
  Problemas com a base de dados - <a href='gerar.php'><button type="button" class="btn btn-success">Gerar Banco!</button></a>
  <br /><br />
  <hr size="5" />
  <a href='cadastro1.php'><button type="button" class="btn btn-outline-primary">Cadastrar</button></a> 
  <br />
  <br /> 
<?PHP 
include ("conecta.php");
  
//seleciona a tabela e executa a consulta
$query = mysqli_query($conexao, "SELECT * FROM clientes") or die(mysqli_error($cx));

echo '<table width="100%" border="1" bordercolor="#003300" class="table table-striped table-bordered table-hover">';
 echo "<tr>";
 echo "<td>ID</td>";
 echo "<td>Data</td>";
 echo "<td>Nome</td>";
 echo "<td>Telefone</td>";
 echo "<td>e-mail</td>";
 echo "<td>Ações</td>";
 echo "<tr>";
//mysql_fetch_array - assoc
while($aux = mysqli_fetch_array($query)) { 
 echo "<tr>";
 echo "<td>".$aux["id"]."</td>";
 echo "<td>".$aux["data"]."</td>";
 echo "<td>".$aux["nome"]."</td>";
 echo "<td>".$aux["telefone"]."</td>";
 echo "<td>".$aux["email"]."</td>";
 echo "<td><a href='consulta.php?codigo=$aux[id]'>Consultar</a> | <a href='editar1.php?codigo=$aux[id]'> Editar | <a href='excluir.php?codigo=$aux[id]'>Excluir</a></td>";
 echo "<tr>";
}

echo "</table>";

?>
  </div>   
  </div>   
</body>
</html>