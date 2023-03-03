<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $v = isset($_GET["valor"])?$_GET["valor"]: 1;
    echo "Calculando o fatorial de $v";
    $n = $v;
    $fat = 1;
    do{
        $fat = $fat * $n;
        $n++;
    }while($n >=1);
    echo "$v : = $fat";
    ?>
</body>
</html>