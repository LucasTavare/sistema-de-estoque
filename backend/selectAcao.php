<?php 

include 'conexao.php';

try{
    $sql = "SELECT e.quantidade, p.id, p.nome, o.tipo FROM entrada_saida e INNER JOIN tb_produto AS p ON e.produto = p.id INNER JOIN operacao as o ON e.tipo = o.id";

    $comando = $con -> prepare($sql);

    $comando -> execute();

    $retorno = $comando ->fetchAll(pdo::FETCH_ASSOC);

    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

    echo $json;

}catch(PDOException $erro){
    echo $erro -> getMessage();
}


?>