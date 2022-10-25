<?php 

include 'conexao.php';

try{

    $id = $_POST['id'];

    $sql = "SELECT * FROM tb_produto where id = '$id'";

    $comando = $con -> prepare($sql);

    $comando -> execute();

    $retorno = $comando ->fetch(PDO::FETCH_ASSOC);

    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

    echo $json;

}catch(PDOException $erro){
    echo $erro->getMessage();
}

?>