<?php 
    class Persona{
        protected $nome;
        protected $cognome;

        public function getNome(){
            $this->nome;
        }
        public function getCognome(){
            $this->cognome;
        }
        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function setCognome($cognome) {
            $this->cognome = $cognome;
        }

        public function presentati(){
            echo "Nome: " . $this->nome . " - Cognome: " . $this->cognome . "<br>";
        }

    }

?>