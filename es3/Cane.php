<?php 
    class Cane extends Animale{

        public function __construct($verso){
            $this->verso = $verso;
        }

        public function verso_stampa(){
            echo "Verso: " . $this->verso . "<br>";
        }
    }
?>