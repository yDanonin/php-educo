<?php
function selectParticipante($pdo, $id){
    $select = $pdo->prepare("select idSala from tbParticipantes where idUsuario = ?");
    $select->bindParam(1, $id);
    $select->execute();

    if($select->rowCount()>0){
        return $select->fetchAll(PDO::FETCH_ASSOC);
    }
    else{
        return false;
    }
}

?>