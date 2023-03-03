<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atribuições</title>
</head>

<body>
    <?php 
    //exercicio de anos 
    
    $ano = date("Y");
    echo " O ano atual é: $ano e o ano anterior é " . --$ano;
    // 
    $a = 3;
    $b = &$a;
    $b += 5;
    echo "<br/>A variável A vale $a";
    echo "<br/>A variável B vale $b";
    // 
    $site = "Cursoemvideo";
    $$site = "cursoPHP";
    echo $site;
    
    ?>
</body>

</html>