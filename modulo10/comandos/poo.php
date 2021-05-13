<?php
    include "../paradigmas/participante.php";
    $p = new participante();
    $search = $p->getList();
    echo "==============EJEMPLO DE POLIMORFISMO MUNDOSE================\n";
    foreach ($search as $p) {
        echo "{$p->nombre} => {$p->apellido} \n";
    }