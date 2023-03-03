<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>

<body>
    <?php 
    for($c = 1;$c <= 10; $c++){
        echo " $c";
    }
    echo "<br> <br>";
    for($c2 = 10;$c2>=1;$c2--){
        echo" $c2";
    }
    echo "<br> <br>";
    for($c3 = 0; $c3<=100; $c3+=5)
    {
        echo" $c3";
    }
    echo "<br> <br>";
    for($c4 = 30; $c4 >=0; $c4-=2 ){
        echo " $c4";
    }
?>

</body>

</html>