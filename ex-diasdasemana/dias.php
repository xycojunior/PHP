<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dias</title>
</head>

<body>
    <?php 
    $d = isset($_GET["dias"])?$_GET["dias"]:0;
    switch($d){
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            echo "Levanta e vai estudar! Seu preguiçoso";
            break;
        case 7:
        case 8:
            echo "Vá descansar pequeno garfanhoto"; 
            break;
        default:
         echo "Dia inválido";

    }
    ?>
    <br>
    <a href="index.html">Voltar</a>
</body>

</html>