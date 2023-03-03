<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <?php 
    $valor = $_GET["v"];
    $raiz = sqrt($valor);
    // echo "A raiz de $valor é $raiz";
    echo "A raiz de $valor é igual a " . number_format($raiz, 2);
    ?>
    <br>
    <a href="index.html">Voltar</a>
</body>

</html>