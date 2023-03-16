<?php
class Carro{
    private $modelo;
    private $marca;
    private $cor;
    private $ano;

    public function __construct($marca, $modelo, $cor, $ano){
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->cor = $cor;
        $this->ano = $ano;
    }
    
    public function informacoes(){
        echo "INFORMAÇÕES DO CARRO: ".PHP_EOL;
        echo "Marca: ", $this->marca.PHP_EOL;
        echo "Modelo: ", $this->modelo.PHP_EOL;
        echo "Cor: ", $this->cor.PHP_EOL;
        echo "Ano: ", $this->ano.PHP_EOL;
    }
}

$carroNissan = new Carro(
    $marca = "NISSAN",
    $modelo = "NISSAN KICKS",
    $cor = "BRANCO",
    $ano = "2023"
);

$carroNissan->informacoes();


?>