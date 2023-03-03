<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="php" href="form.php">

</head>

<body>
    <form method="get" action="form.php">
        <select name="num" id="">
            <?php 
        for($c = 1; $c<=100;$c++){
            echo"<option>$c</option>";
        }
            ?>
        </select>
        <input type="submit" value="Tabuada">
    </form>
</body>

</html>