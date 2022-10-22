<?php

include ('conexao.php');
include ('function.php');

try{
    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $fornecedor = $_POST['fornecedor'];
    $valorUnit = $_POST['valorUnit'];
    $estoque = $_POST['estoque'];
    
    validaCampoVazio($nome,'nome');
    validaCampoVazio($marca,'marca');
    validaCampoVazio($fornecedor,'fornecedor');
    validaCampoVazio($valorUnit,'valorUnit');
    validaCampoVazio($estoque,'estoque');

    $sql = "INSERT INTO tb_produto(`nome`,`marca`,`fornecedor`,`valor_unitario`,`estoque`) VALUES ('$nome','$marca','$fornecedor', '$valorUnit', '$estoque')";

    $comando = $con->prepare($sql);

    $comando -> execute();
    
    if($comando->rowCount()){
        $retorno = ['retorno' => 'ok', 'Mensagem' => 'Produto Cadastro com sucesso!'];

        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
    
        echo $json;
    
        exit();

    }else{
        $retorno = ['retorno' => 'error'];

        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
    
        echo $json;
    
        exit();
    }
    
    

}catch(PDOException $erro){
    echo $erro->getMessage();
}

?>