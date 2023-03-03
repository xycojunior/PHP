<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de atribuição</title>
</head>

<body>
    <?php 
    
    // exercicio
    // aplicar desconto de 10% no produto
    //Usando operadores de atribuição:

    $preco = 955;
    echo "O preço do produto é: R$ $preco";
    // $preco = $preco + ($preco * 10/100);
    
    $preco += $preco * 10/100;
    echo "<br/> E o novo preço com 10% de aumento é R$ $preco";

    $preco -= $preco * 10/100;
    echo"<br/> E o produto com desconto de 10% fica: R$ $preco";

    ?>
</body>

</html>