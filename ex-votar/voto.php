<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infos</title>
</head>

<body>
    <?php 
    $a = isset($_GET["ano"])?$_GET["ano"]:1900;
    $i = date("Y") - $a;
    echo "Você nasceu em $a e tem $i anos <br>";

    if($i < 16){
        $tipoVoto = "não é possivel votar";
    }
    elseif (($i >= 16 && $i < 18) || ($i>65)){
        $tipoVoto = "o voto é opcional";
    }
    else{
        $tipoVoto = "o voto é obrigatório";
    }
    
    echo "Com essa idade, $tipoVoto";
    ?>
</body>

</html>