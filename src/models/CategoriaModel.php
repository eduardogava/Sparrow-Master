<?php

require_once realpath(dirname(__FILE__, 2) . '/config/config.php');

class categoriaModel
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

    public function incluir($dados)
    {
        var_dump($dados);
        $conexao = Database::getConection();

        $nome = $dados['txtNomeCategoria'];
        $novo = $conexao->prepare("INSERT INTO categorias (nome) VALUES (?)");
        $novo->bind_param('s', $nome);
        $novo->execute();
        if ($novo->affected_rows > 0) {
            // $id = mysqli_stmt_insert_id($novo);
            header("Location: categorias.php");
        } else {
            return "Erro ao gravar no banco de dados";
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $categoria = new categoriaModel;
    var_dump($_POST);

    $acao = ($_POST['acao']);

    if ($acao == "insert") {
        print_r("Entrou insert");
        $categoria->incluir($_POST);

    } elseif ($acao == "update") {
        //print_r("Entrou update");
        $categoria->atualizar($_POST);
    }
}