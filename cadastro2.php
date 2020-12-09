<meta  http-equiv="Refresh" content="3;URL=index.php">
<?PHP 
include ("conecta.php");
// as variáveis login e senha recebem os dados digitados na página anterior 
$nome = $_POST['nome']; 
$telefone = $_POST['telefone']; 
$email = $_POST['email'];
  
//seleciona a tabela e executa a consulta
$query = "INSERT INTO clientes(nome,telefone,email)
VALUES ('$nome','$telefone','$email')";

mysqli_query($conexao,$query);

?>