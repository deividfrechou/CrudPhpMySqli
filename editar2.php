<meta  http-equiv="Refresh" content="3;URL=index.php">
<?PHP 
include ("conecta.php");

$id = $_GET['id'];
$nome = $_GET['nome']; 
$telefone = $_GET['telefone']; 
$email = $_GET['email']; 

$query = "UPDATE clientes SET nome = '".$nome."', telefone='".$telefone."' ,email = '".$email."' WHERE id = '".$id."' ";
mysqli_query($conexao,$query);

?>