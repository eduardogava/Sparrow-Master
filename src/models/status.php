<?php
require_once realpath(dirname(__FILE__, 2) . '/config/config.php');

class status
{

    public static function listarStatus()
    {
        $conexao = Database::getConection();

        $sql = "SELECT 'status' FROM categorias";

        $resultado = $conexao->query($sql) or die("Erro no status") . mysql_error();

        if ($resultado) {
            return $resultado;
        } else {
            return false;
        }

    }

}