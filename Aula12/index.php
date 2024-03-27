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
        require_once 'Ave.php';
        require_once 'Mamifero.php';
        require_once 'Peixe.php';
        require_once 'Reptil.php';
        require_once 'GoldFish.php';
        require_once 'Canguru.php';
        require_once 'Cobra.php';
        

        $m = new Mamifero();
        $a = new Ave();
        $r = new Reptil();
        $c = new Cobra();
        $ca = new Canguru();
        $g = new GoldFish();

        $m->locomover();
        $a->locomover();
        $r->locomover();
        $c->locomover();
        $ca->locomover();
        $g->locomover();
        ?>
    </pre>

</body>

</html>