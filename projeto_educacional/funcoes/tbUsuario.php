<?php
function inserirUsuario($pdo, $Nome, $DataNasc, $Email, $Senha){
    $select = $pdo->prepare("select * from tbUsuario where email = ?");
    $select->bindParam(1, $Email);
    $select->execute();
    if($select->rowCount() <= 0){
        $inserir = $pdo->prepare("insert into tbUsuario(Nome, DataNasc, Email, Senha, NomePerfil) values(?,?,?,?,?)");

        $inserir->bindParam(1, $Nome);
        $inserir->bindParam(2, $DataNasc);
        $inserir->bindParam(3, $Email);
        $inserir->bindParam(4, $Senha);
        $inserir->bindParam(5, $Nome);
        $inserir->execute();
        $select2 = $pdo->prepare("select * from tbUsuario where email = ?");
        $select2->bindParam(1, $Email);
        $select2->execute();

        if($select2->rowCount()>0){
            echo "Dados Cadastrados com Sucesso!";
        }
        else{
            echo "Houve um erro ao tentar Cadastrar os Dados.";
        }
    }else{
        echo "O email já foi cadastrado";
    }
}

function selectUsuario($pdo, $Email){
    $select = $pdo->prepare("select NomePerfil, DataNasc, Biografia from tbUsuario where Email = ?");
    $select->bindParam(1, $Email);
    $select->execute();

    return $select->fetchAll(PDO::FETCH_ASSOC);
}
function selectPerfil($pdo, $idUsuario){
    $select = $pdo->prepare("select FotoCapa, FotoPerfil, NomePerfil  from tbUsuario where idUsuario LIKE ?");
    $select->bindParam(1, $idUsuario);
    $select->execute();

    if($select->rowCount() > 0){
        $selectPerfil = $select->fetchAll(PDO::FETCH_ASSOC);
        for($i = 0; $i < count($selectPerfil); $i++){
            echo $selectPerfil[$i]['FotoCapa'];
            echo "<br>";
            echo $selectPerfil[$i]['FotoPerfil'];
            echo "<br>";
            echo $selectPerfil[$i]['NomePerfil'];
            }
    }
    else{
        echo "Não existe nenhum perfil";
    }

}
function selectId($pdo, $Email){
    $select = $pdo->prepare("select idUsuario from tbUsuario where Email LIKE ?");
    $select->bindParam(1, $Email);
    $select->execute();
    return $select->fetch(PDO::FETCH_ASSOC);
}

?>