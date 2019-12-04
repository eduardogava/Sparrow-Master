<?php
require_once realpath(dirname(__FILE__, 2) . '/config/config.php');
class CategoriaModel
{
    public static function listarTodos()
    {

        $conexao = Database::getConection();
        $sql = "SELECT * FROM categorias";

        $resultado = $conexao->query($sql) or
        die("Erro ao listar todas as categorias") . mysql_error();
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
        //Mescla o valor da variavel la no comando SQL prepare onde você colocou
        $novo->bind_param('s', $nome);
        //Grava no banco
        $novo->execute();

        if ($novo->affected_rows > 0) {
            $id = mysqli_stmt_insert_id($novo);
            return $id;
        } else {
            return "Erro ao gravar no banco de dados";
        }
    }

    public function atualizar($dados)
    {
        var_dump($dados);
        $conexao = Database::getConection();

        $edit = $dados['txtNomeCategoria'];
        $novoEdit = $conexao->prepare("UPDATE categorias(nome) SET(?)");
        $novoEdit->bind_param('s', $edit);
        $novoEdit->execute();

        if ($novoEdit->affected_rows > 0) {
            $id = mysqli_stmt_insert_id($novoEdit);
            return $id;
        } else {
            return "Erro ao gravar no banco de dados";
        }
    }
}

//Nas classes de model você criar esse IF que servira como hub direcionando
//um post ou get para uma determinada function
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // aqui é onde vai decorrer a chamada se houver um *request* POST
    $categoria = new CategoriaModel;
    var_dump($_POST);
    $acao = isset($_POST['acao']);
    if ($acao == "insert") {
        print_r("entrou insert");
        $categoria->incluir($_POST);
    }if ($acao == "update") {
        print_r("entrou update");
        //$categoria->atualizar($_POST);
    }
}