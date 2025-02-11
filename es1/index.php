<?php
header("Content-Type: application/json");
require_once 'Alunni.php';

$alunni = [
    new Alunni("Marco","Rossi",16),
    new Alunni("Luca","Bianchi",17),
    new Alunni("Sara","Verdi", 18)
];

/* foreach ($alunni as $alunno) {
    $alunno->stampa();
} */

echo json_encode($alunni);
?>
