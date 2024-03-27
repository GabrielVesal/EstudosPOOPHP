<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 02 - POO</title>
</head>

<body>
    <pre>
    <?php 
        require_once 'Caneta.php';
        $c1 = new caneta;
        $c1->modelo = "BIC cristal";
        $c1->cor = "azul";
        //$c1 ->ponta = 0.5;
        //$c1 ->carga = 99;
        //$c1->tampada = true;
        $c1->rabiscar();
        $c1->tampar();
        print_r($c1);
    ?>
    </pre>
</body>

</html>