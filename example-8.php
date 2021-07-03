<?php
    abstract class Pessoa{
        abstract function apresentar():string;
    }

    class Funcionario extends Pessoa{
        public $nome;

        function __construct($nome){
            $this->nome = $nome;
        }

        function apresentar():string{
            return "Olá!, meu nome é $this->nome";
        }
    }

    $pessoa1 = new Funcionario("Gabriel");
    echo $pessoa1->apresentar();
?>