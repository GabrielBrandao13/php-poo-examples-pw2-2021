<?php
    interface Animal{
        public function comer();
    }


    class Pombo implements Animal{
        public function comer(){
            echo "Comendo...";
        }
    }

    $pombo1 = new Pombo();
    $pombo1->comer();
?>