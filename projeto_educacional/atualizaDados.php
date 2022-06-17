<?php 
require("classes/PDO.php");
require("funcoes/tbUsuario.php");
require("classes/imagem.php");
require('funcoes/seguranca.php');
    verificaLogin();

$id = selectId($pdo, $_SESSION['email']);
$img = new Imagem($_FILES["FotoPerfil"], "FotoPerfil/", $id['idUsuario']);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>