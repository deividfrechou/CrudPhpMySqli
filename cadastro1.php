<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

<body>
<div class="container">
    <h2>Cadastro de Usuários</h2>
    <form action="cadastro2.php" method="post">
    
    <div class="form-group">
    <label for="labelnome">Nome</label>
    <input type="text" class="form-control" name="nome" id="nome" aria-describedby="emailHelp" placeholder="Seu nome completo">
    <small id="descrinome" class="form-text text-muted">Digite seu nome completo sem abreviar</small>
    </div>

    <div class="form-group">
    <label for="labeltelefone">Telefone</label>
    <input type="text" class="form-control" name="telefone" id="telefone" aria-describedby="emailHelp" placeholder="51999999999 - Telefone">
    <small id="descritelefone" class="form-text text-muted">51999999999 - Telefone</small>
    </div>

    <div class="form-group">
    <label for="labelemail">E-mail</label>
    <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Seu e-mail">
    <small id="descriemail" class="form-text text-muted">Digite seu e-mail</small>
    </div>
    
      <button type="submit" class="btn btn-primary">Cadastrar</button>  
    </form>
</div>  
 </body>
</html>