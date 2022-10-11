<?php
include_once("helpers/url.php");
include_once("data/posts.php");
include_once("data/categories.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
  <title>Document</title>
</head>

<body>
  <header>
    <a href="<?= $BASE_URL ?>" id="logo">
      <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Blog Codar">
    </a>
    <nav>
      <ul id="navbar">
        <li>
          <a href="<?= $BASE_URL ?>">HOME</a>
        </li>
        <li>
          <a href="#">Categorias</a>
        </li>
        <li>
          <a href="3">Sobre</a>
        </li>
        <li>
          <a href="<?= $BASE_URL ?>contato.php">contato</a>
        </li>
      </ul>
    </nav>
  </header>