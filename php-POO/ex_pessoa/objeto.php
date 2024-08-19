<?php
// insere a classe
include_once 'classes/pessoa.class.php';

    $pessoa1 = new Pessoa('Joao Cowboy', 1.65, 24, 76, 3000);
    echo $pessoa1->exibeInformacao();
    echo "<br /> Salario : {$pessoa1->salario} <br />";
    echo "Novo salario: {$pessoa1->aumentaSalario(10)}<br/>";
    echo "Altura da pessoa:{$pessoa1-> alturaDaPessoa(1.70)} <br/>";
    echo "Classificação de idade: {$pessoa1->classificacaoIdade(37)} <br/>";
    echo "Verificação de Idade: {$pessoa1->verificaMaiorIdade(20)} <br/>";
    echo "Classificacao de IMC: {$pessoa1->classificacaoIMC(23.5)} <br/>";
?>
