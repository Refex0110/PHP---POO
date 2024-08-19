<?php

class Gato extends Animal 
{
    private $cor;

    public function __construct($nome, $idade, $cor) 
    {
        parent::__construct($nome, $idade);
        $this->cor = $cor;
    }

    public function fazer_Som() 
    {
        echo "O gato mia.<br>";
    }

    public function pegar_cor() 
    {
        return $this->cor;
    }
}

?>
