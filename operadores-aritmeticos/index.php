<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>

<body>
    <?php 
    //soma
    $num1 = 3;
    $num2 = 4;
    $soma = $num1 + $num2;
    echo "A soma entre $num1 e $num2 é $soma. <br/><br/>";

    // Operadores
    $num3 = 10;
    $num4 = 8;
    $media = ($num3 + $num4)/2;
    echo "Os números são: $num3 e $num4 <br/> ";
    echo "A soma vale " . ($num3 + $num4);
    echo " <br/>A subtração vale " . ($num3 - $num4);
    echo "<br/>A multiplicação vale " . ($num3 * $num4);
    echo "<br/>A divisão vale " . ($num3 / $num4);
    echo "<br/>O modulo vale " . ($num3 % $num4);
    echo "<br/>A média vale " . $media;
    ?>
</body>

</html>