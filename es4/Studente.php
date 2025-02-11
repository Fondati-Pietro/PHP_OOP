<?php 
    class Studente extends Persona{
        protected $matricola;

        public function __construct($nome,$cognome,$matricola){
            $this->nome = $nome;
            $this->cognome = $cognome; 
            $this->matricola = $matricola;
        }

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
       
        public function stampa() {
            echo "Nome: " . $this->nome . ", Cognome: " . $this->cognome . ", Matricola: " . $this->matricola . "<br>";
        }
    }
?>