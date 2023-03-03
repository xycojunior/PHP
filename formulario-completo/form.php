<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infos do formulario</title>
</head>

<body>
    <?php
    //forma de não quebrar o formulario
    // $nome = isset($_GET["nome"])?$_GET["nome"]:"["Não configurado"];
    $nome = $_GET["nome"];
    $ano = $_GET["ano"];
    $sexo = $_GET["sexo"];
    $email = $_GET["email"];
    $telefone = $_GET["telefone"];
    $novidades = $_GET["novidades"];

    echo "O nome do cliente é: $nome";
    echo "<br>Ele nasceu em: $ano";
    echo "<br>O sexo dele é: $sexo ";
    echo "<br>O seu email é: $email ";
    echo "<br>Seu telefone é $telefone ";
    echo "<br>Ele deseja $novidades receber novidades";
    ?>

    <br>
    <a href="index.html">Voltar</a>
</body>

</html>