<?php 
    require('funcoes/seguranca.php');
    verificaLogin();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <title>Jogos</title>
</head>
<body>
    <div id="logo">
        <img src = "img/Icones/Logo.png" alt="some text">
    </div>

<h1>Jogos</h1>

<div id="nav">
    <p><a href="jogos.php"><button type="submit">Jogos</button></a></p>
    <p><a href="home.php"><button type="submit">Home</button></a></p>
    <p><a href="perfil.php"><button type="submit">Perfil</button></a></p>
    <p><a href="salas.php"><button type="submit">Salas</button></a></p>
</div>

<h1>Pesquisar</h1>
<form method="POST" action="pesquisar.php">
    <input type="text" name="pesquisar" placeholder="Pesquisar">
    <input type="submit" value="ENVIAR">
</form>
