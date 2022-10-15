<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// ASSUNTO DA AULA

$id =  8;

$stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

$nome = "sofá";
$descricao = "era um microfone";

$stmt->bind_param("ssi", $nome, $descricao, $id);

$stmt->execute();

if ($stmt->error) echo "erro" . $stmt->error;
