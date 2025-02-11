<?php 
    require_once 'Veicolo.php';
    require_once 'Automobile.php';

    $auto = [
        new Automobile("BMW","bko",2005),
        new Automobile("Mercedes","AMG", 2016),
        new Automobile("Toyota","R34",2000)
    ];

    foreach ($auto as $a) {
        $a->stampa();
    }
?>