<?php

    include('./classes/c_animal.php');
    include('./classes/c_cachorro.php');
    include('./classes/c_gato.php');
            
    $cachorro = new Cachorro("Rex", 5, "Labrador");
    $gato = new Gato("Miau", 3, "Preto");

    echo "Cachorro" . "<br>";
    echo "Nome: " . $cachorro->pegar_nome() . "<br>";
    echo "Idade: " . $cachorro->pegar_idade() . "<br>";
    echo "Raça: " . $cachorro->pegar_raca() . "<br>";
    echo "Som: ";
    $cachorro->fazer_Som();
    echo "<br>";

    echo "Gato" . "<br>";
    echo "Nome: " . $gato->pegar_nome() . "<br>";
    echo "Idade: " . $gato->pegar_idade() . "<br>";
    echo "Cor: " . $gato->pegar_cor() . "<br>";
    echo "Som: ";
    $gato->fazer_Som();
    echo "<br>";

?>
