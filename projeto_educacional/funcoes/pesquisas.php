<?php

function pesquisaPeloEmail($pdo, $email){
    $select = $pdo->prepare("select FotoPerfil, NomePerfil from tbUsuario where Email LIKE :texto");
    $select->bindValue(':texto', '%'.$email.'%');
    $select->execute();
    if($select->rowCount()>0){
        $pesquisaEmail = $select->fetchAll(PDO::FETCH_ASSOC);
        for($i = 0; $i < count($pesquisaEmail); $i++){
            echo $pesquisaEmail[$i]["FotoPerfil"];
            echo " ";
            echo $pesquisaEmail[$i]["NomePerfil"];
            echo "<br>";
        }
    }
    else{
        echo "não achamos nenhum dado compatível :("; 
        echo "<br>";
    }
}
function pesquisaPeloNome($pdo, $NomePerfil){
    $select = $pdo->prepare("select FotoPerfil, NomePerfil from tbUsuario where NomePerfil LIKE :texto LIMIT 7;");
    $select->bindValue(':texto', '%'.$NomePerfil.'%');
    $select->execute();

    if($select->rowCount()>0){
        $pesquisaNome = $select->fetchAll(PDO::FETCH_ASSOC);
        for($i = 0; $i < count($pesquisaNome); $i++){
            echo $pesquisaNome[$i]['FotoPerfil'];
            echo " ";
            echo $pesquisaNome[$i]['NomePerfil'];
            echo "<br>";
        } 
    }
    else{
        echo "não achamos nenhum dado compatível :(";
        echo "<br>";
    }
}

function pesquisaPorSalas($pdo, $NomeSala){
    $select = $pdo->prepare("select Foto, NomeSala from tbSala where NomeSala LIKE :texto");
    $select->bindValue(':texto', '%'.$NomeSala.'%');
    $select->execute();

    if($select->rowCount()>0){
        $pesquisaSala = $select->fetchAll(PDO::FETCH_ASSOC);
        for($i = 0; $i < count($pesquisaSala); $i++){
            echo $pesquisaSala[$i]['Foto'];
            echo " ";
            echo $pesquisaSala[$i]['NomeSala'];
            echo "<br>";
        } 
    }
    else{
        echo "não achamos nenhum dado compatível :(";
        echo "<br>";
        
    }    
}
function pesquisaPorJogos($pdo, $NomeJogo){
    $select = $pdo->prepare("select Nome from tbJogo where Nome = :texto");
    $select->bindValue(':texto', '%'.$NomeJogo.'%');
    $select->execute();

    if($select->rowCount()>0){
        $pesquisaJogo = $select->fetchAll(PDO::FETCH_ASSOC);
        for($i = 0; $i < count($pesquisaJogo); $i++){
            echo $pesquisaJogo[$i];
            echo " ";
            echo "<br>";
        } 
    }
    else{
        echo "não achamos nenhum dado compatível :(";
        echo "<br>";
        
    }    
}


?>