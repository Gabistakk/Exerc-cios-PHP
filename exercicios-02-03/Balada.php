<?php

class Visitante
{

    private $nome;
    private $idade;
    private $genero;

    private static $numeroDeVisitantes = 0;

    public static $numeroLimiteAtingido = false;


    public function __construct($nome, $idade, $genero)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->genero = $genero;
        if(self::$numeroDeVisitantes >= 5){
            echo ''.PHP_EOL, "ERRO NUMERO LIMITE ATINGIDO. O USUARIO: ", $this->nome, " NÃO FOI CADASTRADO.".PHP_EOL;
            $this->__destruct();
        }
        else{
            self::$numeroDeVisitantes++;
        }
    }

    public function __destruct()
    {
        $this->nome = null;
        $this->idade = null;
        $this->genero = null;
        
    }

    public function VisitanteSai(){
        $this->__destruct();
        self::$numeroDeVisitantes--;
    }
    public function getNome()
    {
        return $this->nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public static function getNumeroDeVisitantes()
    {
        return self::$numeroDeVisitantes;
    }
}

$visitante1 = new Visitante(
    "lucas1",
    20,
    "M"
);

$visitante2 = new Visitante(
    "joao2",
    25,
    "F"
);

$visitante3 = new Visitante(
    "tenis3",
    32,
    "F"
);

$visitante4 = new Visitante(
    "visitante4",
    20,
    "M"
);

$visitante5 = new Visitante(
    "visitante5",
    15,
    "F"
);

$visitante6 = new Visitante(
    "vistante6",
    18,
    "M"
);

$visitante2->VisitanteSai();

$visitante7 = new Visitante(
    "visitante7",
    154,
    "F"
);

echo Visitante::getNumeroDeVisitantes(), Visitante::$numeroLimiteAtingido.PHP_EOL.PHP_EOL;

print_r($visitante7);

print_r($visitante2);

?>