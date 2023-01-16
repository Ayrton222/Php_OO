<?php

    class Pai{
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        /*

        //Acessando  private

        public function getNome(){
            return $this->nome;
        }

         //Acessando  protected

         public function getSobrenome(){
            return $this->sobrenome;
        }

        //mudando o valor da variavel private

        public function setNome($valor){

            //verificar se o parametro nao é vazio

            if(strlen($valor) >= 3){
                $this->nome = $valor;
            }else{
                echo '<br />Nome invalido ';
            }
            
        }

        //Mudando o valor da variavel protect

        public function setSobrenome($valor){

            //verificar se o parametro nao é vazio

            if(strlen($valor) >= 3){
                $this->sobrenome = $valor;
            }else{
                echo '<br />Sobrenome invalido ';
            }
            
        }

        */

        

        //getter e setter "Magicos" // Como sao publico tambem sao acessado pela herança

        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo, $value){
            $this->$atributo = $value;
        }


        //metodos

        private function executarMania(){
            echo 'Assobiar';
        }

        protected function responder(){
            echo 'Oi';
        }

        public function executarAcao(){
            /*
            chamando um metood private/protect
            $this->executarMania();
            echo '<br />';
            $this-> responder();
            */

            //pequena logica

            $x = rand(1,10);
            if($x >= 1 && $x <= 8){
                $this-> responder();
            }else{
                $this->executarMania();
            }
        }
    }

    //$pai = new Pai();
   
    /*

     //Public -> esta disponivel para a aplicação toda
     echo $pai->humor;
     //mudando o valor
     $pai->humor = 'Triste';
     echo '<br />';
     echo $pai->humor;

    */

    /*

    //private e proetected nao podem ser acessados diretamente
    //echo $pai->nome;

    //acessando private
    echo $pai->getNome();

    //Mudando valor(nome)
    $pai->setNome('jamilton');
    echo '<br />';
    echo $pai->getNome();

    */

    /*

     //acessando protected
     echo $pai->getSobrenome();

     //Mudando valor(nome)
     $pai->setSobrenome('Oliveira');
     echo '<br />';
     echo $pai->getSobrenome();
     */

     /*
     //acessando com getters e setter magicos
     echo $pai->nome;
     $pai->nome = 'Jamilton';
     echo '<br />';
     echo $pai->nome;

    */

    /*
    
    //acessando metodos 
    echo $pai->executarAcao();

    */

     //herança

     class Filho extends Pai{

        /*
        //pegando o atributo
        public function getAtributo($atributo){
            return $this->$atributo;
        }

        //mudando o valor

        public function setAtributo($atributo,$value){
            $this->$atributo =$value;
        }

        */

        public function __construct(){
            //exibir os metodos do objeto
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        
        }

        private function executarMania(){
            echo 'Cantar';
        }

        public function x(){
            $this->executarMania();
        }

    }

    $filho = new Filho();
        

    //vendo os atributos herdado 
    echo '<pre>';
    print_r($filho);
    echo '</pre>';

    /*

    echo $filho->getAtributo('humor');
    $filho->setAtributo('humor','triste');
    echo '<br />';
    echo $filho->getAtributo('humor');

    */

    /* 
    //Criando o atributo publico nome dentro do objeto filho

    //echo $filho->getAtributo('nome');
    $filho->setAtributo('nome','Pereira');
   
    echo '<pre>';
    print_r($filho);
    echo '</pre>';

    echo '<br />';
    echo $filho->getAtributo('nome');

    */

    //executando ação

    $filho->executarAcao();
    echo '<br />';
    $filho->x();



    //FIM herança

?>