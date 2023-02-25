<?php
namespace App\Model;

if(isset($_POST['conta']) && !empty($_POST['conta'])){
    $conta = $_POST[ 'conta' ];

    $pessoa = new Pessoa();
    $pessoa->setConta($conta);

    $contas = new ContaPessoas();
    $contas->login($pessoa->getConta());

}



?>
<!DOCTYPE html>
<html lang = 'en'>
<head>
<meta charset = 'UTF-8'>
<meta http-equiv = 'X-UA-Compatible' content = 'IE=edge'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<title>Document</title>
</head>
<body>
<h1>login</h1>
<form method = 'post'>
Conta: <br>
<input type = 'text' name = 'conta'><br>
Agencia: <br>
<input type = 'text' name = 'agencia'><br>
Senha: <br>
<input type = 'password' name = 'senha'><br>

<input type = 'submit' value = 'Entrar'>

</form>
</body>
</html>

