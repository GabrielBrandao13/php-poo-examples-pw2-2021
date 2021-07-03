<?php 
    class Pessoa{
        public $nome;
        public $idade;

        function falar($frase){
            echo $frase;
        }
    }

    $pessoa1 = new Pessoa();

    $pessoa1->nome = "Gabriel";
    $pessoa1->idade = 16;

    $pessoa1->falar("Olá! meu nome é $pessoa1->nome, e tenho $pessoa1->idade anos de idade! ");
?>