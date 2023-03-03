<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>

<body>
    <?php 
    //Variavies podem mudar!
    $nome = "Francisco";
    $sobrenome = "Júnior";
    $idade = 18;
    $peso = 74.5;
    // Mostra o valor do tipo primitivo
    // var_dump($peso);
    $casado = false;
    //Constantes não mudam!
    const PAIS = "Brasil";
    const CURSO = "TI";
    //echo e print para mostrar na tela.
    echo "Muito prazer, $nome $sobrenome ! Você mora no " . PAIS ;
    echo " Você pesa: $peso kg/";
    print " Sua idade é $idade."
    ?>

</body>

</html>