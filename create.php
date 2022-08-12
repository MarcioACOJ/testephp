<?php

include './connection.php';

$conn = getConnection();

$sql = 'INSER INTO produto (descricao,qtd,valor) VALUES (:desc,:qts:valor)';

$descricao = "Arroz 2";
$qtd = 11;
$valor = 11.80;

$stmt = $conn->prepare($sql);
$stmt->bindParam(':desc', $descricao);
$stmt->bindParam(':qtd', $qtd);
$stmt->bindParam(':valor', $valor);

if($stmt->execute()){
    echo 'Salvo com sucesso!';
}else{
    echo 'Erro ao salvar!';
}

