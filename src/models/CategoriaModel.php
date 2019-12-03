<?php
require_once realpath(dirname(__FILE__, 2) . '/config/config.php');

class CategoriaModel
{

    public static function listarTodos()
    {
        $conexao = Database::getConection();

        $sql = "SELECT * FROM categorias";

        $resultado = $conexao->query($sql) or die("Erro ao listar todas as categorias") . mysql_error();

        if ($resultado) {
            return $resultado;
        } else {
            return false;
        }

    }

}