<?php


    try{ //tente
        echo '<h3> TRY </h3>';

        //forçando um erro
       // $sql = 'select * from clientes';
       // mysql_query($sql);

       //forçando uma exceção

       if(!file_exists('require_arquivo_a.php')) { //Verifica se um arquivo existe
        throw new Exception('O arquivo em questão deveria estar disponivel as '. date('d/m/Y H:i:s') .' horas mas não estava. Vamos seguir mesmo assim'); // lançar
       } 

    } catch (Error $e) { //pegar
        echo '<h3> catch </h3>';
        echo $e;
    } catch (Exception $e){
        echo '<h3> catch Exception </h3>';
        echo $e;
    
    }finally { //finalmente
        echo '<h3> FINALLY </h3>';
    }
?>