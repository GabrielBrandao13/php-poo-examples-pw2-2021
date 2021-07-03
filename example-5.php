<?php 
    class Pessoa{
        public $nome;
        public $idade;

        function falar($frase){
            echo $frase;
        }

        function __construct($nome, $idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }
    }

    $pessoa1 = new Pessoa("Gabriel", 16);

    $pessoa1->falar("Olá! meu nome é $pessoa1->nome, e tenho $pessoa1->idade anos de idade! ");
?>