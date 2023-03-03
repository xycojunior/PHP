<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rotinas em php</title>
</head>

<body>
    <?php 
    function soma ($a, $b){
        $s = $a + $b;
        echo "A soma vale $s <br>";
    }
    soma(3,4);
    soma(8,2);
    $x = 9;
    $y = 15;
    soma ($x, $y);

    function soma1 ($c,$d){
        $s2 = $c + $d;
        return $s2;
    }
    $z = -3;
    $w = 10;
    $r = soma1($z,$w);
    echo"A segunda soma entre $z e $w é igual a $r";

    function soma2(){
        $p = func_get_arg();
        $t = func_num_args();
        $s = 0;
        for ($i=0; $i < $t; $i++) { 
            $s += $p[$i];
        }
        return $s;
    }
    $r = soma2 (3,5,2,8,9,4);
    echo "A soma dos valores é $r ";
    ?>
</body>

</html>