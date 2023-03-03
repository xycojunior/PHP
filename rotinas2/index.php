<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Rotinas 2</title>
</head>

<body>
    <?php 
// Qualquer alteração em x é igual em a, passagem de parametro por referencia, os dois valores vão ficar iguais.
    function teste(&$x){
        $x+=2;
        echo " O valor de X é $x <br>";
    }
    $a = 3;
    teste($a);
    echo"O valor de A é $a";
// rotinas externas, sem estar no arquivo
// Use um arquivo externo como funçoes.php e inclua com include, para ter menos repeticao de codigo e facilitar a alteracao.
    require "funcoes.php";
    echo "<br>Testando novas funções<br>";
    ola();
    echo"<br>";-
    mostrarValor(4);
    echo"<br>Finalizando programa...";

// include tenta continuar executando o procedimento, pode usar quandonão é obrigatorio
// require é obrigatorio incluir para não quebrar o código

// include_once, require_once b verificar se já existe para não repetir o carregamento - carregar apenas 1 vez 
    ?>
</body>

</html>