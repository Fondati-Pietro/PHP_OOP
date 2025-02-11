<?php 
    class Persona{
        protected $nome;
        protected $cognome;

        public function getNome(){
            $this->nome
        }
        public function getCognome(){
            $this->cognome
        }
        public function setMarca($nome) {
            $this->nome = $nome;
        }
        public function setMarca($marca) {
            $this->marca = $marca;
        }

        public function presentati(){
            echo "Nome: " . $this->nome . " - Cognome: " . $this->cognome . "<br>";
        }

    }

?>