<?php
//Classe abstrata de ações no banco de dados
class Database {
    public static function getConnection()
    {
        //Voce agora deverá puxar as informacoes do arquivo INI.
        
        //grava o caminho do env.ini     
        $envPath = realpath(dirname(__FILE__,2).'/env_dev.ini');
        print_r($envPath);

        //parse_ini_file e uma funcao que aguarda chave e valor, com isto voce consegue ler o arquivo ini para pegar os dados.
        //$env = parse_ini_file($envPath);
        //Cria a conexao com o banco de dados
        //$conn = new mysqli($env['host'], $env['username'], $env['password'], $env['database']);
        //Verifica caso algum erro tenha acontecido ele mostra o erro.
        //if($conn->connect_error){
            //die("Erro: ". $conn->connect_error);
       // }
        return $conn;
    }
}