<?php
namespace App\Model;
class ContaPessoa {
    public function create(Pessoa $p)
    {
        $sql = 'INSERT INTO contas (titular, conta, agencia, senha, saldo) VALUES (?,?,?,?,?)';

        $cadastro = Conect::getConn()->prepare($sql);
        $cadastro->bindValue(1, $p->getTitular());
        $cadastro->bindValue(2, $p->getConta());
        $cadastro->bindValue(3, $p->getAgencia());
        $cadastro->bindValue(4, $p->getSenha());
        $cadastro->bindValue(5, $p->getSaldo());
        $cadastro->execute();
    }

    public function read()
    {
    }

    public function update(Pessoa $p)
    {
    }

    public function delete($id)
    {
    }

    
}
