<?php 
    class Automobile extends Veicolo{
        protected $modello;

        public function __construct($marca,$modello,$anno){
            $this->marca = $marca;
            $this->modello = $modello; 
            $this->anno = $anno;
        }

        public function getModello(){
            $this->modello;
        }
        public function setMarca($marca) {
            $this->marca = $marca;
        }
        public function setAnno($anno) {
            $this->anno = $anno;
        }
        public function setModello($modello) {
            $this->modello = $modello;
        }

        public function stampa() {
            echo "Marca: " . $this->marca . ", Modello: " . $this->modello . ", Anno: " . $this->anno . "<br>";
        }
    }
?>