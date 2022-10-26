<?php
    include 'conexao.php';

    try {
        $id_produto = $_POST['modal-id'];
        $quantidade = $_POST['modal-quantidade'];
        $tipo = $_POST['tipo'];

        if ($tipo == 1) {
            $amount = $_POST['amount'] + $quantidade;
        } elseif ($tipo == 2) {
            $amount = $_POST['amount'] - $quantidade;
        }

        $sql = "UPDATE tb_produto SET estoque = $amount WHERE id = $id_produto";

        $comando = $con->prepare($sql);
        
        $comando -> execute();

        $sql = "INSERT INTO entrada_saida (produto,quantidade,tipo) VALUES ('$id_produto','$quantidade','$tipo')";

        $comando = $con->prepare($sql);
        
        $comando -> execute();

        $retorno = ['retorno' => 'ok'];

        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

        echo $json;

    }catch(PDOException $erro){
        echo $erro->getMessage();
    }
?>