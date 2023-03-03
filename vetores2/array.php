<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores 2</title>
</head>

<body>
    <pre>
    <?php 
    $vetor = array("A", "B", "C", "D", "E");
    echo "O vetor tem " . count($vetor) . " elementos <br>";
    rsort($vetor);
    print_r($vetor);
    $vetor[] = "F";

    // array_push($vetor,70); adicionar elementos no final
    // array_pop($vetor); - elimina o vetor do final

    // incluir elementos no inicio do vetor
    // array_unshift($vetor,7);
    // array_shift($vetor); - Elimina o vetor do 1 indice

    // ordenar valores - sort($vetor);
    //  colocar ordem inversa rsort($vetor);

    // ordem assosiativa - asort($vetor); 
    // ordem assosiativa reversa- arsort($vetor); 

    // Ordem por chaves - Colocar os indices em ordem - ksort($vetor);
    // Ordem reversa por chaves - Colocar os indices em ordem inversa- krsort($vetor);

    array_unshift($vetor, 123);
    echo "O vetor tem " . count($vetor) . " elementos <br>";
    sort($vetor);
    print_r($vetor);

    // mais detalhada
    var_dump($vetor);
    ?>
    </pre>
</body>

</html>