<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>

<body>
    <?php 
    $n1 = $_GET["nota1"];
    $n2 = $_GET["nota2"];
    $media = ($n1 + $n2)/2;
    if($media >= 7){
        $resultado = "APROVADO";
    }
    elseif ($media < 7 && $media >= 4){
        $resultado = "RECUPERAÇÃO";
    }
    else{
        $resultado = "REPROVADO";
    }
    echo "A média entre $n1 e $n2 é igual a $media <br>";
    echo "Situação do aluno $resultado";
    ?>
</body>

</html>