<?php

    class Exemplo{
        public static $atributo1 = 'Eu sou um atributo estatico';
        public $atributo2 = 'Eu sou um atributo normal';

        public static function metodo1(){
            echo 'Eu sou um metodo estatico';
        }

        public function metodo2(){
            echo 'Eu sou um metodo normal';
        }
    }

    //nao e necessario fazer a instancia ($variavel = new Exemplo())

    //Para acessar atributos/metodos static
    echo Exemplo::$atributo1;
    echo '<br />';
    Exemplo::metodo1();

    
?>
