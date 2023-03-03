<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String 1 </title>
</head>

<body>
    <?php 
    // Função printf
    $produto = "Leite";
    $preco = 6.5;
    printf ("O %s custa R$ %.2f", $produto, $preco);

    echo "<br><br>";
    // Função print_r
    $v [0] = 4;
    $v [1] = 8;
    $v [2] = 10;
    print_r ($v);

    echo "<br><br>";
    // Função wordwrap
    $texto = "Aqui temos um texto grande criado pelo PHP que vai mostrar o resultado da função wordwrap!!!";
    $resultado = wordwrap($texto, 20,"<br>\n", false);
    echo $resultado;

    echo "<br><br>";
    // Função strlen
    $txt = "Eu assisto aulas no curso em video";
    $tamanho = strlen($txt);
    echo "A frase $txt tem $tamanho letras/caracteres";

    echo "<br><br>";
    // Função trim - facilita os dados vindos de um formulario
    $nome = "xxxFranciscoxdaxSilvaxxx";
    echo (strlen($nome));
    $novo = trim($nome);
    echo "<br>";
    echo($novo);
    echo (strlen($novo));

    ?>


</body>

</html>