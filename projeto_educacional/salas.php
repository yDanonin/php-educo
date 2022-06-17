<?php 
    require('funcoes/seguranca.php');
    verificaLogin();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
   
    <meta charset="UTF-8">
    <title>SALAS</title>
</head>
<body>
    <div id="logo">
        <img src = "img/Icones/Logo.png" alt="some text">
    </div>

<h1>Salas</h1>

<div id="nav">
    <p><a href="jogos.php"><button type="submit">Jogos</button></a></p>
    <p><a href="home.php"><button type="submit">Home</button></a></p>
    <p><a href="perfil.php"><button type="submit">Perfil</button></a></p>
    <p><a href="salas.php"><button type="submit">Salas</button></a></p>
</div>

<?php
require('funcoes/tbUsuario.php');
require('funcoes/tbParticipantes.php');
require('funcoes/tbSala.php');
require('classes/PDO.php');


$pegarIdUsuario = selectId($pdo, $_SESSION['email']);
$pegarIdSala = selectParticipante($pdo, $pegarIdUsuario["idUsuario"]);

if($pegarIdSala == false){
    echo "Não encotramos nenhuma sala que você participe";
}
else{
    for($i = 0; $i < count($pegarIdSala); $i++){
        $idSala = (int)$pegarIdSala[$i]['idSala'];
        selectSala($idSala);
        echo "<br>";
    }
}

echo "<br>";
echo "Você não tem mais salas";
echo "<br>";
echo "Para obter mais salas, pesquise por salas publicas ou seja convidado a entrar em salas privadas.";
?>