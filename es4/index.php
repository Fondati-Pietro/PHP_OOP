<?php 
    require_once 'Persona.php';
    require_once 'Studente.php';

    $studenti = [
        new Studente("Mirco","fw",20655),
        new Studente("Paolo","AdfdMG", 201456),
        new Studente("Rio","ddd",20654600)
    ];

    foreach ($studenti as $s) {
        $s->stampa();
    }
?>