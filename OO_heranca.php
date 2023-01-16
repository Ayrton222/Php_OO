<?php

    class Carro extends Veiculo{
        public $teto_solar = true;

        function __construct($placa,$cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abrirTetoSolar(){
            echo 'Abrir teto solar';
        }

        function alterarPosicaoVolante(){
            echo 'Alterar posiçao volante';
        }
    }


    class Moto extends Veiculo{
       
        public $contraPesoGuidao = true;

        function __construct($placa,$cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar(){
            echo 'Empinar';
        }
    
    }

    class Veiculo{
        public $placa = null;
        public $cor = null;

        function acelerar(){
            echo 'Acelerar';
        }

        function freiar(){
            echo 'Freiar';
        }
    }

    $carro = new Carro('ABC1234', 'Branco');
    $moto = new Moto('DEF1122', 'Preto');

    echo '<pre>';
    print_r($carro);
    print_r($moto);
    echo '</pre>';

    echo '<hr>';

    $carro->acelerar();
    echo '<br />';
    $carro->freiar();
?>