<?php

class Animal 
{
    private $nome;
    private $idade;

    public function __construct($nome, $idade) 
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function fazer_Som() 
    {
        echo "O animal faz um som genérico.<br>";
    }

    public function pegar_nome() 
    {
        return $this->nome;
    }

    public function pegar_idade() 
    {
        return $this->idade;
    }
}

?>