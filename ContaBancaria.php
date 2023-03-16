<?php

class ContaBancaria{
    private $numero;
    private $saldo;
    private $titular;


    public function __construct($numero, $saldo, $titular){
        $this->numero = $numero;
        $this->saldo = $saldo;
        $this->titular = $titular;
    }

    public function sacar(float $quantidade){
        if($this->saldo >= $quantidade){
            $saldoAntes = $this->saldo;
            $this->saldo = $this->saldo - $quantidade;
            echo "Saque Concluido com Sucesso!".PHP_EOL;
            echo "Quantidade ANTES do saque: ", number_format($saldoAntes, 2).PHP_EOL;
            echo "Quantidade DEPOIS do saque: ", number_format($this->saldo, 2).PHP_EOL;
            echo "✅".PHP_EOL;
            return;
        }
        echo "ERRO.".PHP_EOL, "QUANTIA INSUFICIENTE.".PHP_EOL, "❌".PHP_EOL;
    }
}

$pessoa1 = new ContaBancaria(
    $numero = 123123,
    $saldo = 1000.50,
    $titular = "pessoa1 da silva"
);

$pessoa1->sacar(550.30);


?>