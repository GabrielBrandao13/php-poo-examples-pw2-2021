<?php 
    class Pessoa{
        public $nome;
        public $idade;
        private $senha_do_cartao;

        function falar($frase){
            echo $frase;
        }

        function __construct($nome, $idade, $senha_do_cartao){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->senha_do_cartao = $senha_do_cartao;
        }
    }

    $pessoa1 = new Pessoa("Gabriel", 16, 3424245);

    $pessoa1->falar("Olá! meu nome é $pessoa1->nome, e tenho $pessoa1->idade anos de idade!, minha senha do cartão é: $pessoa1->senha_do_cartao ");
?>