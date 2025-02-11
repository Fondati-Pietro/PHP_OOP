<?php 
    class Automobile extends Veicolo{
        protected $modello;

        public function getModello(){
            $this->modello;
        }
        public function setMarca($marca) {
            $this->marca = $marca;
        }
        public function setAnno($anno) {
            $this->anno = $anno;
        }
        public function setMarca($modello) {
            $this->modello = $modello;
        }
       
    }
?>