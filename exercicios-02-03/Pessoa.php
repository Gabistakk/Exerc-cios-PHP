<?php

class Pessoa
{

    // Declarando componentes
    private static $counter;
    private $nome;
    private $cpf;
    private $idade;

    private $peso;

    private $altura;

    // Construtor inicializando componentes
    public function __construct($nome = null, $cpf = null, $idade = null, $peso = null, $altura = null)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->altura = $altura;
        self::$counter++;
    }


    // Metodos Setter

    public function setPeso($newPeso)
    {
        $this->peso = $newPeso;
    }

    public function setAltura($newAltura)
    {
        $this->altura = $newAltura;
    }


    public function setNome($newNome)
    {
        $this->nome = $newNome;
    }

    public function setCpf($newCpf)
    {
        $this->cpf = $newCpf;
    }

    public function setIdade($newIdade)
    {
        $this->idade = $newIdade;
    }

    // Metodos Getter
    public function getNome()
    {
        return $this->nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function getImc()
    {
        return $this->peso / ($this->altura * 2);
    }


    // Getter do contador tipo static
    public static function getStaticCounter()
    {
        return self::$counter;
    }
}
// Inicializando um novo objeto "Pessoa"
echo "PRIMEIRO EXERCICIO 1️⃣: " . PHP_EOL . PHP_EOL;
$pessoa1 = new Pessoa();

echo "Antes das atribuições 🔜: " . PHP_EOL;
echo "Nome: ", $pessoa1->getNome() . PHP_EOL, "CPF: ", $pessoa1->getCpf() . PHP_EOL, "Idade: ", $pessoa1->getIdade() . PHP_EOL . PHP_EOL;

// Atribuindo valores aos componentes da nova Pessoa
$pessoa1->setNome("Lucas");
$pessoa1->setCpf(24485158837);
$pessoa1->setIdade(21);


echo "Depois das atribuições ☑: " . PHP_EOL;
echo "Nome: ", $pessoa1->getNome() . PHP_EOL, "CPF: ", $pessoa1->getCpf() . PHP_EOL, "Idade: ", $pessoa1->getIdade() . PHP_EOL . PHP_EOL;

echo "SEGUNDO EXERCICIO 2️⃣: " . PHP_EOL . PHP_EOL;

$pessoa2 = new Pessoa(
    $nome = "João",
    $cpf = 12345678900,
    $idade = 30
);

echo "Objeto Pessoa antes de alterar: " . PHP_EOL;
echo "Nome: ", $pessoa2->getNome() . PHP_EOL, "CPF: ", $pessoa2->getCpf() . PHP_EOL, "Idade: ", $pessoa2->getIdade() . PHP_EOL . PHP_EOL;

$pessoa2->setNome("João Da Silva");
$pessoa2->setCpf(242435432);
$pessoa2->setIdade(33);

echo "Objeto Pessoa depois de alterar: " . PHP_EOL;
echo "Nome: ", $pessoa2->getNome() . PHP_EOL, "CPF: ", $pessoa2->getCpf() . PHP_EOL, "Idade: ", $pessoa2->getIdade() . PHP_EOL . PHP_EOL;

echo "NUMERO DE OBJETOS CRIADOS: ", Pessoa::getStaticCounter();



// Atividade para avaliação
$pessoa1 = new Pessoa();

$pessoa1->setNome("Lucas");
$pessoa1->setCpf(24485158837);
$pessoa1->setIdade(21);

$pessoa1->setPeso(60);
$pessoa1->setAltura(1.70);

echo $pessoa1->getImc();
