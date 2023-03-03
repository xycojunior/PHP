<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Lógicos</title>
</head>

<body>
    <?php 
    // Or - ||, and - &&, xor, not - !
    //exercicio eleições
    $ano = 2004;
    $idade = date("Y") - $ano;
    echo "Você nasceu em $ano e tem $idade anos de idade. ";
    $tipo = ($idade >= 18 && $idade <= 65)?" É OBRIGATÓRIO" : "NÃO É OBRIGATÓRIO";
    echo "<br/>Sendo assim, seu voto  $tipo";
    ?>
</body>

</html>