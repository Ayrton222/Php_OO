<?php

    //Se tiver 2 classes (uma vinda de biblioteca, com o mesmo nome), ira dar erro, para evitar isso cria-se o namespace

    namespace A;

    //para usar um interface de outro namespace -> \B\CadastroInterface // E implementar ele
    class Cliente implements \B\CadastroInterface{ 
        public $nome = 'Jorge';

        public function __construct(){
            echo '<pre>';
                print_r(get_class_methods($this));
            echo '</pre>';
        }
        public function __get($atributo){
            return $this->$atributo;
        }

        public function salvar(){
            echo 'Salvar';
        }

        public function remover(){
            echo 'Remover';
        }
    }

    //Implementando interface no namespace A

    interface CadastroInterface{
        public function salvar();
    }

    namespace B;

    class Cliente implements CadastroInterface {
        public $nome = 'Jamilton';
        public function __construct(){
            echo '<pre>';
                print_r(get_class_methods($this));
            echo '</pre>';
        }
        public function __get($atributo){
            return $this->$atributo;
        }

        public function remover(){
            echo 'Remover';
        }
    }

     //Implementando interface no namespace B

     interface CadastroInterface{
        public function remover();
    }



    //Aqui esta instanciando a classe do namespace B
    $c = new Cliente();
    print_r($c);
    echo $c->__get('nome');

    echo '<br />';

    //Para instanciar a classe do namespace A

    $c = new \A\Cliente();
    print_r($c);
    echo $c->__get('nome');

    echo '<br />';
?>