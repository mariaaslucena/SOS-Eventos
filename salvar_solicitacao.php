<?php
include("conexao.php");

$nome_cliente=$_POST['nome_cliente'];
$data_evento=$_POST['data_evento'];
$descricao_evento=$_POST['descricao_evento'];
$id_fotografo=$_POST['id_fotografo'];


$sql= "INSERT INTO solicitacoes (nome_cliente, data_evento, descricao_evento, id_fotografo)
VALUES
('$nome_cliente', '$data_evento', '$descricao_evento', '$id_fotografo')";

if ($conexao->query($sql) === TRUE) {
    echo "Solicitação salva com sucesso!";
    }
else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();

?>
