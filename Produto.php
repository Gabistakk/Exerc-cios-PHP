<?php
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
class Produto{
    private $nome;
    private $quantidade;
    private $preco;
    private $data_val;
    private $data_prod;
    private $vencido;


    public function __construct($nome, $quantidade, $preco, $data_val, $data_prod, $vencido = false){
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->preco = $preco;
        $this->data_val = $data_val;
        $this->data_prod = $data_prod;
        $this->vencido = $vencido;
    }
    public function rotulo(){
        echo PHP_EOL, "Nome do produto: ", $this->nome.PHP_EOL;
        echo "Quantidade em estoque: ", $this->quantidade.PHP_EOL;
        echo "Preço unidade: ", $this->preco.PHP_EOL;
        echo "Data de Validade: ", date("d/m/Y l",  $this->data_val).PHP_EOL;
        echo "Data de Produção: ", date("d/m/Y l", $this->data_prod).PHP_EOL;
        $this->calcularTotal();
        $this->testeValidade();
    }
    
    public function calcularTotal(){
        echo "Valor total de produtos em estoque: ", $this->preco * $this->quantidade.PHP_EOL;
    }
    
    public function testeValidade(){
        if(date("y/m/d",  $this->data_val) <= date("y/m/d")){
            echo "O produto VENCEU." .PHP_EOL;
            echo ''.PHP_EOL;
            $this->vencido = true;
        }
    }
    
    public function vender(int $quantidadeVenda){
        if($this->quantidade >= $quantidadeVenda){
            $quantidadeAntesVenda = $this->quantidade;
            $this->quantidade = $this->quantidade - $quantidadeVenda;
            echo "Venda Concluida!".PHP_EOL;
            echo "Quantidade ANTES da venda: ", $quantidadeAntesVenda.PHP_EOL;
            echo "Quantidade APÓS a venda: ", $this->quantidade.PHP_EOL;
            echo "Lucro Estimado: ", $quantidadeVenda * $this->preco;
            echo "✅".PHP_EOL;
            return;
        }
        echo "ERRO. QUANTIADADE DE PRODUTOS INSUFICIENTE.".PHP_EOL;
        echo "❌".PHP_EOL;
    }
}

$chocolate = new Produto(
    $nome = "Chocolate em barra Hershey's",
    $quantidade = 500,
    $preco = 10.50,
    $data_val = mktime(0, 0, 0, 2, 10, 2023),
    $data_prod = mktime(0, 0, 0, 2, 10, 2023),
);
$carne = new Produto(
    $nome = "Carne Sadia",
    $quantidade = 100,
    $preco = 50.00,
    $data_val = mktime(0, 0, 0, 2, 24, 2023),
    $data_prod = mktime(0, 0, 0, 2, 10, 2023),
);
$chocolate->vender(200);

$chocolate->rotulo();
?>