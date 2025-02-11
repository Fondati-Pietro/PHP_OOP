<?php
class Alunni {
    protected $nome;
    protected $cognome;
    protected $eta;

    public function getNome() {
        return $this->nome;
    }

    public function getCognome() {
        return $this->cognome;
    }

    public function getEta() {
        return $this->eta;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCognome($cognome) {
        $this->cognome = $cognome;
    }

    public function setEta($eta) {
        $this->eta = $eta;
    }

    public function stampa() {
        echo "Nome: " . $this->nome . ", Cognome: " . $this->cognome . ", Età: " . $this->eta . "<br>";
    }
}
?>
