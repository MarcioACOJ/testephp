<?php

include './connection.php';

$conn = getConnection();

$sql = "SELECT * FROM produto";

$stmt = $conn->prepare($sql);
$stmt->execute();

$result = $stmt->fetchAll();

foreach ($result as $value) {
    
    echo 'Desc: '.$value['descricao']. '<br>';

}