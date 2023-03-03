<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais</title>
</head>

<body>
    <?php
    $num1 = 10;
    $num2 = 8; 
    $tipo = 0;
    echo "Os valores passados foram: $num1 e $num2 <br/>";
    $resultado = ($tipo =="s")? $num1 +$num2 : $num1 * $num2;
    echo "O resultado será $resultado";
    // 
    $a = 3;
    $b = "3";
    $r = ($a === $b) ? "SIM" : "NÃO";
    echo "<br/>A = 3";
    echo "<br/>B = \"3\" ";
    echo "<br/>As variáveis A e B são iguais? $r";
    // 
    $nota1 = 10;
    $nota2 = 8;
    $media = ($nota1 + $nota2)/2;
    echo " <br/><br/>A média entre $nota1 e $nota2 é $media ";
    
    // $situacao = ($media<6)?"REPROVADO":"APROVADO";
    // echo "<br/>A situação do aluno é $situacao";

    echo "<br/> A situação do aluno é" . ($media<6)?"REPROVADO":"APROVADO";
    ?>
</body>

</html>