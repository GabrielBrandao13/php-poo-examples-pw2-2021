<?php
    interface Animal{
        $nome;
        public function comer();
        public function dormir();
    }


    class Pombo implements Animal{
        public function comer(){
            echo "Comendo...";
        }
    }

    $pombo1 = new Pombo();
    $pombo1->comer();
?>