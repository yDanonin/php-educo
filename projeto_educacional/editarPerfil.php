<?php
    require('funcoes/seguranca.php');
    verificaLogin();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Educo</title>
</head>
<body>
    <div id="logo">
        <img src = "img/Icones/Logo.png" alt="some text">
    </div>
    <form method="post" action="atualizaDados.php" enctype="multipart/form-data">
        <div id="formulario">
            <p><label for="FotoPerfil">Foto de Perfil: </label><input id="FotoPerfil" type="file" name="FotoPerfil"/></p>
            <p><input type="submit"value="Editar"/></p>
        </div>
    </form>
    <!--<div id="print">
    <?php/*
        require("funcoes/tbUsuario.php");
        require("classes/PDO.php");
        $select = selectUsuario($pdo, $_SESSION['email']);
        echo "<table border = \"1\">";
        foreach($select as $dados){
            echo "<tr>";
            echo "<form action=\"\">";
            echo "Nome do Perfil: ";
            echo "<td><input type=\"text\" name=\"NomePerfil\" value=\"".$dados["NomePerfil"]."\" /></td>";
            echo "<br>";
            echo "Data de Nascimento: ";
            echo "<td><input type=\"text\" name=\"DataNasc\" value=\"".$dados["DataNasc"]."\" /></td>";
            echo "<br>";
            echo "Biografia: ";
            echo "<td><input type=\"text\" name=\"Biografia\" value=\"".$dados["Biografia"]."\" /></td>";
            echo "</form>";
            echo "</tr>";
        }
        
        echo"</table>";
    */?>
    </div>-->
        
</body>
</html>
