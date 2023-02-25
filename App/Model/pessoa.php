<?php
namespace App\Model;

class Pessoa {
    private $titular, $conta, $agencia, $senha, $saldo;

    public function __construct($titular, $conta, $agencia, $senha, $saldo){
        $this->setTitular($titular);
        $this->setConta($conta);
        $this->setAgencia($agencia);
        $this->setSenha($senha);
        $this->setSaldo($saldo);
    }
    public function setTitular( $titular ) {
        $this->titular = $titular;
    }

    public function getTitular() {
        return $this->titular;
    }

    public function setConta($conta) {
        $this->conta = $conta;
    }

    public function getConta(){
        return $this->conta;
    }

    public function setAgencia($agencia){
        $this->agencia = $agencia;
    }

    public function getAgencia(){
        return $this->agencia;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getSenha(){
        return $this->senha;
    }
    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function getSaldo(){
        return $this->saldo;
    }
}