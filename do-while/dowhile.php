<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do while</title>
</head>
<body>
    <?php 
    $c = 1;
    do{
        echo $c . "<br>";
        $c++;
    } while ($c <=10);
    $c1 = 10;
    do{
        echo $c1 . "<br>";
        $c1--;
    } while ($c1 >= 1);
    ?>
</body>
</html>