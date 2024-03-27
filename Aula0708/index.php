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
        require_once 'Lutador.php';
        require_once 'Luta.php';
        $l = array();
        $l[0] = new Lutador("Pretty Boy", "França", 30, 1.75, 68.9, 11, 2, 1);
        $l[1] = new Lutador("Putscrpt", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
        $l[2] = new Lutador("Javascripto", "Brasil", 25, 1.80, 85.6, 17, 0, 6);

        $UEC01 = new Luta();
        $UEC01->marcarLuta($l[0],$l[1]);
        $UEC01->lutar();
        $l[0]->status();
        $l[1]->status();
        ?>
    </pre>
</body>

</html>