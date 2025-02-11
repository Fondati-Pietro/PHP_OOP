<?php 
    class Veicolo{
        protected $marca;
        protected $anno;

        public function getMarca(){
            return $this->marca;
        }
        public function getAnno(){
            return $this->anno;
        }
        public function setMarca($marca) {
            $this->marca = $marca;
        }
        public function setAnno($anno) {
            $this->anno = $anno;
        }

    }
?>