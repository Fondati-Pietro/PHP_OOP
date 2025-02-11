<?php
require_once 'Alunni.php';

$alunni = [
    new Alunni(),
    new Alunni(),
    new Alunni()
];


$alunni[0]->setNome('Marco');
$alunni[0]->setCognome('Rossi');
$alunni[0]->setEta(16);

$alunni[1]->setNome('Luca');
$alunni[1]->setCognome('Bianchi');
$alunni[1]->setEta(17);

$alunni[2]->setNome('Sara');
$alunni[2]->setCognome('Verdi');
$alunni[2]->setEta(18);

foreach ($alunni as $alunno) {
    $alunno->stampa();
}
?>
