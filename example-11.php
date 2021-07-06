<?php
    interface Animal{
        public function comer();
    }


    class Passaro implements Animal{
        public function voar(){
            echo "Voando";
        }

        public function comer(){
            echo "Comendo";
        }
    }

    class Pombo extends Passaro{
        function apresentar(){
            echo "Olá! sou um pombo";
        }
    }

    $pombo1 = new Pombo();
    $pombo1->comer();
    echo "<br/>";
    $pombo1->apresentar();
?>