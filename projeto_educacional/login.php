<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" type="text/css" href="login.css">
    <meta charset="UTF-8">
    <title>Educo</title>
</head>

<body>
    <form method="post" action="" enctype="multipart/form-data">
        <div id="formulario">
            <p><label for="email">Email: </label><input id="email" type="mail" name="email"/></p>
            <p><label for="senha">Senha: </label><input id="senha" type="password" name="senha"/></p>
            <p><input type="submit"value="Entrar"/></p>
        </div>
    </form>
    <div id="print">
    <?php
    if($_POST) {
        session_start();
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $_SESSION['email'] = $email;

        require("classes/PDO.php");
        $selectSenha = $pdo->prepare("select senha from tbUsuario where email = ? and senha = ?");
        $selectSenha->bindParam(1, $email);
        $selectSenha->bindParam(2, $senha);
        $selectSenha->execute();
        
        if ($senha == "") {
            echo "Senha não foi alterada!";
        } else if ($selectSenha->rowCount()>0 ) { 
            echo "<meta HTTP-EQUIV='Refresh' CONTENT='0; URL=home.php'>";
        } else {
            echo "Usuario ou senha incorreta";
        }
    }
    ?>
    </div>
    
</body>

</html>


