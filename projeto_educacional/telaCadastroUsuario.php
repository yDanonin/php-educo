<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" type="text/css" href="telaCadastroUsuario.css">
    <meta charset="UTF-8">
    <title>Cadastro Educo</title>
</head>
<body>
    <div id="logo">
        <img src = "img/Icones/Logo.png" alt="some text">
    </div>
    
    <form method="post" action="" enctype="multipart/form-data">
        <div id="formulario">
            <p><label for="nome">Nome: </label><input id="nome" type="nome" name="nome"/></p>
            <p><label for="datanasc">Data de Nascimento: </label><input id="datanasc" type="date" name="datanasc"/></p>
            <p><label for="email">Email: </label><input id="email" type="mail" name="email"/></p>
            <p><label for="senha">Senha: </label><input id="senha" type="password" name="senha"/></p>
            <p><label for="confime_senha">Confirme Senha: </label><input id="confirme_senha" type="password" name="confirme_senha"/></p>
            <p><input type="submit"value="Cadastrar"/></p>
            
        </div>
    </form>
    <div id="print">
    <?php
    if($_POST) {
        $senha          = $_POST['senha'];
        $senhaConfirma  = $_POST['confirme_senha'];
        if ($senha == "") {
            echo "Senha não foi alterada!";
        } else if ($senha == $senhaConfirma) {
            require("funcoes/tbUsuario.php");
            require("classes/PDO.php");
            inserirUsuario($pdo, $_POST["nome"],$_POST["datanasc"],$_POST["email"],$_POST["senha"]);
        } else {
            echo "As senhas não conferem!";
        }
    }
    ?>
    </div>
</body>
</html>


