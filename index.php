<?php
use App\Model\Pessoa;

require_once 'vendor/autoload.php';

$contaCadastro = new App\Model\ContaPessoa();
$contaCadastro->create($pessoa);


$pessoa = new Pessoa('Wesley Rosado', 333, 222, 123, 300);



