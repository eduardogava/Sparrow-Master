<?php
require_once realpath(dirname(__FILE__, 2) . '/config/config.php');

class LoginModel
{
    public static function logar($dados)
    {
        $email = $dados['inputEmail'];
        $senha = $dados['inputSenha'];

        $conexao = Database::getConection();
        $sql = "SELECT email, primeiro_nome, segundo_nome
                FROM usuarios
                WHERE email = '$email' AND senha = '$senha'";

        $resultado = $conexao->query($sql) or die("Erro ao efetuar o login") . mysql_error();

        if ($resultado) {
            return $resultado;
        } else {
            return false;
        }
    }
}