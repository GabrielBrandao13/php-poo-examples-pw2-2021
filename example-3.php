<?php 
    class Pessoa{
        public $nome;
        public $idade;

        function falar($frase){
            echo $frase;
        }
    }

    $pessoa1 = new Pessoa();

    $pessoa1->falar("Olá!");
?>