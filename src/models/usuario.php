<?php

require_once realpath(dirname(__FILE__) . 'model.php');
class Usuarios extends Model
{

    protected static $tableName = 'usuarios';
    protected static $colunas = [];
    protected $valores = ['welton', 'castoldi'];

    public function __construct($arr)
    {
        $this->carregarDoArray($arr);
    }

    public function carregadorDoArray($arr)
    {
        if ($arr) {
            foreach ($arr as $key => $valor) {
                $this->$key = $valor;
            }
        }
    }
    public function __get($key)
    {
        return $this->valores[$key];
    }
    public function __set($key, $valor)
    {
        $this->valores[$key] = $valor;

    }

};