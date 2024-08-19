<?php

  class Pessoa {
     var $nome;
     var $altura;
     var $idade;
     var $peso;
     var $salario;

   function __construct($nome, $altura, $idade, $peso, $salario){
        $this->nome = $nome;
        $this->altura = $altura;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->salario = $salario;
  }

   function envelhecer($anos){
       if($anos > 0) {
       $this->idade += $anos;
    }
   }

   function exibeInformacao(){ 
     return "Olá {$this->nome} você tem {$this->idade} anos.";
   }

   function alturaDaPessoa($altura){
     if($altura > 1.60){
       return "alta";
     }  else {
       return "baixa";
     }
  }

   function classificacaoIdade($idade){
     $classificacao = "";

     if ($idade < 18){
       $classificacao = "criança";
     } else if ($idade < 21) {
       $classificacao = "adolescente";
     } else if ($idade < 65) {
       $classificacao = "adulto";
     } else {
       $classificacao = "idoso";
     }
     return $classificacao;
   }

   function verificaMaiorIdade($idade){
       if ($idade >= 18){
         return "a pessoa é maior de idade";
       } else {
         return "a pessoa é menor de idade";
       }
   }


   function classificacaoIMC($peso){
    $classificacaoIMC = "";

    if ($peso < 18.5){
      $classificacaoIMC = "magreza";
    } else if ($peso < 24.9) {
      $classificacaoIMC = "saudável";
    } else if ($peso < 29.9) {
      $classificacaoIMC = "sobrepeso";
    } else if ($peso < 34.9) {
      $classificacaoIMC = "obesidade grau I";
    } else if ($peso < 39.9) {
      $classificacaoIMC = "obesidade grau II (severa)";
    } else {
      $classificacaoIMC = "obesidade grau III (morbida)";
    }
    return $classificacaoIMC;
  }


   function exibeSalario(){
     return $this->salario;
   }

   function aumentaSalario($porcentagem){
     return $this->salario=$this->salario+ ($this->salario*$porcentagem/100);
   }

}
?>