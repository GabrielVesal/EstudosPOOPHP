<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
    <?php 
    require_once 'Caneta.php';
    $c1 = new Caneta("BIC", "AZUL",0.5);
   
    print_r($c1);
    ?>
    </pre>

</body>

</html>