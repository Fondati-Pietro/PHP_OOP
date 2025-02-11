<?php 
    class Studente extends Persona{
        protected $matricola;

        public function getMatricola(){
            $this->matricola;
        }
        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function setCognome($cognome) {
            $this->cognome = $cognome;
        }
        public function setMatricola($matricola) {
            $this->matricola = $matricola;
        }
       
    }
?>