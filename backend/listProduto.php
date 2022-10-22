<?php 

include 'conexao.php';

try{
    $sql = "SELECT * FROM tb_produto";

    $comando = $con -> prepare($sql);

    $comando -> execute();

    $retorno = $comando ->fetchAll(pdo::FETCH_ASSOC);

    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

    echo $json;

}catch(PDOException $erro){
    echo $erro -> getMessage();
}


?>