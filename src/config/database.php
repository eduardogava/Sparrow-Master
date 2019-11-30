<?php

class Database {

    public static function getConection(){
        //Primeiro, pego o caminho do arquivo de configuração ENV
        $pathEnv = realpath(dirname(__FILE__,2).'/env_dev.ini');
        
        //Segundo, pegar as chaves do arquivo de configuração 
        $env = parse_ini_file($pathEnv);
        
        $conn = new mysqli($env['host'], $env['username'], 
                           $env['password'], $env['database']);

        if($conn->connect_error){
            die("Erro: ". $conn->connect_error);
        }
        
        return $conn;
    }

}