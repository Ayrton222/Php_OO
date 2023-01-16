<?php

    //Orientação a objetos

    //Modelo

    class Funcionario{
        //atributos

        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        /*
        //setter
        function setNome($nome){
            $this->nome = $nome;
        }

        function setNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }

         //getters 

         function getNome(){
             return $this->nome;
         }

         function getNumFilhos(){
            return $this->numFilhos;
        }

        */

        //getters e setter overloading

        //setter

        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        function __get($atributo){
            return $this->$atributo;
        }

        //metodos
        function resumirCadFun(){
            return $this->__get('nome') . " possui " . $this->__get('numFilhos') . " filho(s)";

        }

        function modificarNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;

        }
    }

    //Instanciando

    $y = new Funcionario();
    //$y->setNome('José');
    //$y->setNumFilhos(2);
    //echo $y->resumirCadFun();

    $y->__set('nome','José');
    $y->__set('numFilhos',2);
    echo $y->resumirCadFun();


  // echo $y->getNome() . ' possui ' . $y->getNumFilhos() . ' filho(s)';
  //echo $y->__get('nome'). ' possui ' . $y->__get('numFilhos') . ' filho(s)';
?>