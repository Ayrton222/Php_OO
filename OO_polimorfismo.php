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

        //sobrepondo o metodo do veiculo (pai)
        function trocarMarchar(){
            echo 'Desengatar embreagem com a mão e engatar marcha com o pé';
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

        function trocarMarchar(){
            echo 'Desengatar embreagem com o pe e engatar marcha com a mao';
        }
    }

    $carro = new Carro('ABC1234', 'Branco');
    $moto = new Moto('DEF1122', 'Preto');

   $carro->trocarMarchar();
   echo '<br />';
   $moto->trocarMarchar();

?>