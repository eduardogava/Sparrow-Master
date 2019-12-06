<?php

require_once realpath(dirname(__FILE__, 2) . '/config/config.php');

class subCategoriaModel
{
    public static function listarTodos()
    {

        $conexao = Database::getConection();
        $sql = "SELECT c.nome as categoria, s.nome as subcategorias FROM categorias as c JOIN subcategorias s ON c.id_categoria = s.id_subcategoria
        ";

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

        $nome = $dados['txtNomeSubCategoria'];
        $novo = $conexao->prepare("INSERT INTO subcategorias (nome) VALUES (?)");
        $novo->bind_param('s', $nome);
        $novo->execute();
        if ($novo->affected_rows > 0) {
            // $id = mysqli_stmt_insert_id($novo);
            header("Location: subcategorias.php");
        } else {
            return "Erro ao gravar no banco de dados";
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $subcategoria = new subCategoriaModel;
    var_dump($_POST);

    $acao = ($_POST['acao']);

    if ($acao == "insert") {
        print_r("Entrou insert");
        $subcategoria->incluir($_POST);

    } elseif ($acao == "update") {
        //print_r("Entrou update");
        $subcategoria->atualizar($_POST);
    }
}