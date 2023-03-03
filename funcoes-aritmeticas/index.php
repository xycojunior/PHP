<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>

<body>
    <?php 
    $valor1 = $_GET["x"];
    $valor2 = $_GET["y"];
    echo "<h2>Valores recebidos: $valor1 e $valor2<h2/>";
    echo"O valor absoluto de $valor2 e " . abs($valor2);
    
    ?>
</body>

</html>