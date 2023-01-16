<?php

    //Execption customizada

    class MinhaExceptionCustomizda extends Exception{
        private $erro = '';

        public function __construct($erro){
                $this->erro =$erro;
        }

        public function exibirMensagemErroCustomizada(){
            //return $this->erro;

            //Customizando
            echo '<div style="border: solid 1px black; padding: 15px; background-color: red; color: white;">';
                echo $this->erro;
            echo '</div>';
        }
    }
    try{
        //throw new Exception ('Esse é um erro de teste');
        throw new MinhaExceptionCustomizda ('Esse é um erro de teste');
    } catch (MinhaExceptionCustomizda $e){
        //echo $e->exibirMensagemErroCustomizada();
        $e->exibirMensagemErroCustomizada();
    }
?>