<?php
function selectSala($idSala){
    require('classes/PDO.php');
    $select = $pdo->prepare('select NomeSala, Publico, Foto from tbSala where idSala = ?');
    $select->bindParam(1, $idSala);
    $select->execute();
    $registro = $select->fetch(PDO::FETCH_ASSOC);
    echo $registro['Foto'];
    echo $registro['NomeSala'];
    if($registro['Publico'] == 1){
        echo ' Sala Publica';
    }
    else{
        echo ' Sala Privada';
    }
}   


?>