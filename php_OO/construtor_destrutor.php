<?php

    class Pessoa{
        public $nome = null;

        //metodo construtor

        function __construct($nome){
            echo 'Objeto iniciado';
            $this->nome = $nome;
        }

        //metodo destructor

        function __destruct(){
             echo 'Objeto removido';
        }

        function __get($atributo){
            return $this->$atributo;
        }

        function correr(){
            return $this->__get('nome') .' esta correndo';
        }
    }

    $pessoa = new Pessoa('Jorge');
    echo '<br /> Nome: '.$pessoa-> __get('nome');
    echo '<br />' . $pessoa->correr();

    echo '<br />';
    unset($pessoa);
?>

