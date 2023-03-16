<?php


class Produto{

    private string $nome;

    private float $preco;

    private int $quantidade;

    private $codigo;

    private static $countCodigo;

    public function __construct($nome = null, $preco = null, $quantidade = null){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        self::$countCodigo++;
        $this->codigo = self::$countCodigo;
    }


    public function adicionarEstoque($adicionar = 1){
        $this->quantidade = $this->quantidade + $adicionar;
    }

    public function vender($remover = 1){
        $this->quantidade = $this->quantidade - $remover;
    }


    // GETTER SETTERS PADRÕES IGNORAR!!!!!!!!!!!!!!!!
    public function setNome($newNome)
    {
        $this->nome = $newNome;
    }

    public function setPreco($newPreco)
    {
        $this->preco = $newPreco;
    }
    public function setQuantidade($newQuantidade)
    {
        $this->quantidade = $newQuantidade;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function getPreco()
    {
        return $this->preco;
    }
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }


}


$produto = new Produto(
    "Chocolate LACTA",
    10.50,
    100
);

echo ''.PHP_EOL, "ANTES DE ADICIONAR PRODUTOS AO ESTOQUE: " .PHP_EOL;

print_r($produto);

echo ''.PHP_EOL, "DEPOIS DE ADICIONAR 50 PRODUTOS AO ESTOQUE: " .PHP_EOL;
$produto->adicionarEstoque(50);

print_r($produto);

echo ''.PHP_EOL, "DEPOIS DE VENDER 100 PRODUTOS: " . PHP_EOL;
$produto->vender(100);

print_r($produto);

unset($produto);

$produto = new Produto(
    "Cerveja Heineken",
    7.99,
    1000
);

print_r($produto);


?>