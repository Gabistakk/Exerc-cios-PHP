<?php
class Database
{
    private string $porta = "localhost";
    private string $nomeDoBanco = "report_bullying";
    private string $usuarioBanco = "root";
    private string $senhaBanco = "";

    private function conexao()
    {
        $conexao = new PDO(
            "mysql:host=$this->porta;
    dbname=$this->nomeDoBanco",
            $this->usuarioBanco,
            $this->senhaBanco
        );
        return $conexao;
    }

    public function query($query)
    {
        return $this->conexao()->query($query);
    }

    public function getConexao()
    {
        return $this->conexao();
    }
}
