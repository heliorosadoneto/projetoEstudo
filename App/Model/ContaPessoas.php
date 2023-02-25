<?php
namespace App\Model;

class ContaPessoas {
    public function create( Pessoa $p )
 {
        if ( $this->existConta($p) == false ) {

            $sql = 'INSERT INTO contas (titular, conta, agencia, senha, saldo) VALUES (?,?,?,?,?)';

            $cadastro = Conect::getConn()->prepare( $sql );
            $cadastro->bindValue( 1, addslashes( $p->getTitular() ) );
            $cadastro->bindValue( 2, addslashes( $p->getConta() ) );
            $cadastro->bindValue( 3, addslashes( $p->getAgencia() ) );
            $cadastro->bindValue( 4, md5( $p->getSenha() ) );
            $cadastro->bindValue( 5, addslashes( $p->getSaldo() ) );
            $cadastro->execute();

        }else{
            echo "conta ja existe";
        }

    }

    public function read()
 {
    }

    public function update( Pessoa $p )
 {
    }

    public function delete( $id )
 {
    }

    public function login(Pessoa $p){
        if($this->existConta($p) == false){
            header('Location: index.php');
        }else{
            echo "erro";
        }
    }
    public function existConta( Pessoa $p) {
        $sql = 'SELECT * FROM contas WHERE conta = :conta';

        $stmt = Conect::getConn()->prepare( $sql );
        $stmt->bindValue( ':conta', $p->getConta() );
        $stmt->execute();

        if($stmt->rowCount() > 0 ){
            return true;
        }else{
            return false;
        }
    }

}
