<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores</title>
</head>

<body>
    <pre>
    <?php 
    $n = array (3,5,2,8);
    $n[] = 7;
    print_r($n);

    // 1 posição começa com o número, o do meio é a quantidade de casas, e o último pula de 2 em 2 casas
    $vetor = range(5,20,2);
    print_r($vetor);

    foreach($vetor as $valor){
        echo "$valor ";
    }

    echo "<br>";
    $cadastro = array("nome"=>"Ana", "idade"=>23, "peso"=>65.5);
    $cadastro ["fuma"] = true; 
    print_r($cadastro);
    foreach($cadastro as $classe => $conteudo){
        echo "O campo $classe possui o conteúdo $conteudo. <br>";
    }

    echo "<br>";
    // matrizes
    $num = array(array(2,3), array(3,4), array(9,5));
    print_r ($num);
    ?>
    </pre>
</body>

</html>