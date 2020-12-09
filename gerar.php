<?php 
	// cria e verifica uma conexao com servidor, para criar o
	//banco de dados
	$link = new mysqli('localhost', 'root', '', '');
	$link->set_charset('utf8');

	if ($link)
	{
		echo "conexao ok";
	}
	else
	{
		die('Connect Error (' . mysqli_connecterrno() . ')' .
			mysqli_connect_error());
	}

	//Criando o banco de dados caso nao exista
	$nomeBanco = "crud_php";

	$query_create_schema = "CREATE SCHEMA IF NOT EXISTS $nomeBanco"
	or die ("Error in the consult .. " . $link->connection_error);
	$result_create_schema = $link->query($query_create_schema);

	if ( $link->query($query_create_schema) === TRUE )
	{
		echo "<p>criou banco de dados </p>";
	}
	else
	{
		echo "<p>nao criou banco de dados</p>";
	}

	//criando a tabela votar caso nao exista
	mysqli_select_db($link , $nomeBanco);

	$query_create_table = "CREATE TABLE `clientes` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
		`data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
        `nome` varchar(50) NOT NULL,
        `telefone` varchar(11) NOT NULL,
		`email` varchar(100) NOT NULL,
        PRIMARY KEY (`id`)
        )"
	or die("Error in the create table ... " . $link->connect_error);
	$result_create_table = $link->query($query_create_table);

	//Se a tabela for criada corretamente ou ja existir
	//entao sera encaminhado bpara a pagina votar.php
	// caso contrario a um erro na criacao da tabela
	if($result_create_table == TRUE)
	{
        echo "Tudo certo - Prosiga para página inicial";
        echo "<br><br><a href='index.php'>Clique Aqui !!!</a>";
	}
	else
	{
		echo "<p>nao criou a tabela</p>";
	}

?>