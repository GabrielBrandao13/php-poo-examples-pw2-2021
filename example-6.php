<?php
    class Animal{
        public $especie;

        function __construct($especie){
            $this->especie = $especie;
        }

        function comer(){
            echo "Estou comendo!";
        }
    }

    class Passaro extends Animal{
        function digestao_do_passaro(){
            $this->comer();
            echo "Agora estou digerindo!";
        }
    }

    $passaro1 = new Passaro("Pomba");

    $passaro1->digestao_do_passaro();
?>