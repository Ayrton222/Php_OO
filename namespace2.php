<?php

    require("./bibliotecas/lib1/lib1.php");
    require("./bibliotecas/lib2/lib2.php");

    //importando

    //Se importar mais de um com o mesmo nome dara erro, para isso tem que apelidar

    use A\Cliente;

    $c = new Cliente();
    print_r($c);
    echo $c->__get('nome');

    echo '<br />';

    //apelidando

    use B\cliente as C2;

    $c = new C2();
    print_r($c);
    echo $c->__get('nome');

    echo '<br />';
    
?>