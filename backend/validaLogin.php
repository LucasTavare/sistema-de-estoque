<?php

include ('conexao.php');

try{
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT email,senha FROM login WHERE email = '$email' AND BINARY senha = $senha";

    $comando = $con -> prepare($sql);

    $comando -> execute();

    $dados = $comando->fetchALL(PDO::FETCH_ASSOC);

    if($dados != null){
        $retorno = ['retorno' => 'ok'];

        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

        echo $json;

        exit();

    }else{
        $retorno = ['retorno' => 'erro'];

        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

        echo $json;

        exit();
        
    }

}catch(PDOException $erro){
    echo $erro->getMessage();
}










?>