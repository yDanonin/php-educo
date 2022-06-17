<?php 
    require('funcoes/seguranca.php');
    verificaLogin();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <title>Pesquisa</title>
</head>
<body>
    <div id="logo">
        <img src = "img/Icones/Logo.png" alt="some text">
    </div>

<h1>Pesquisa</h1>

<div id="nav">
    <p><a href="jogos.php"><button type="submit">Jogos</button></a></p>
    <p><a href="home.php"><button type="submit">Home</button></a></p>
    <p><a href="perfil.php"><button type="submit">Perfil</button></a></p>
    <p><a href="salas.php"><button type="submit">Salas</button></a></p>
</div>


<form method="POST" action="">
    <input type="text" name="pesquisar" placeholder="Pesquisar">
    <input type="submit" value="ENVIAR">
</form>

<?php
    require("funcoes/pesquisas.php");
    require("classes/PDO.php");

    echo "<br>";
    echo "Pesquisa por Email parecidos:";
    echo "<br>";
    pesquisaPeloEmail($pdo, $_POST["pesquisar"]);
    

    echo "<br>";
    echo "Pesquisa por Nomes parecidos:";
    echo "<br>";
    pesquisaPeloNome($pdo, $_POST["pesquisar"]);
    

    echo "<br>";
    echo "Pesquisa por Salas parecidos:";
    echo "<br>";
    pesquisaPorSalas($pdo, $_POST["pesquisar"]);
    

    echo "<br>";
    echo "Pesquisa por Jogos parecidos:";
    echo "<br>";
    pesquisaPorJogos($pdo, $_POST["pesquisar"]);
?>