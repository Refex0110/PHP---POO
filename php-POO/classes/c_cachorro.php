<?php

class Cachorro extends Animal 
{
    private $raca;

    public function __construct($nome, $idade, $raca) 
    {
        parent::__construct($nome, $idade);
        $this->raca = $raca;
    }

    public function fazer_Som() 
    {
        echo "O cachorro late.<br>";
    }

    public function pegar_raca() 
    {
        return $this->raca;
    }
}

?>
