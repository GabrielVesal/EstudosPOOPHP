<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
        <?php 
        require_once 'Aluno.php';
        require_once 'Bolsista.php';

        //$v1 = new Visitante();
        //$v1->setNome("Juvenal");
        //$v1->setIdade(33);
        //$v1->setSexo("M");
        //print_r($v1);

        $al = new Aluno();
        $al->setNome("Pedro");
        $al->setMatricula(1111);
        $al->setIdade(16);
        $al->setSexo("M");
        $al->setCurso("Informática");
        $al->pagarMensalidade();
        print_r($al);

        $b1 = new Bolsista();
        $b1->setNome("Jubileu");
        $b1->setMatricula(11521);
        $b1->setIdade(19);
        $b1->setSexo("M");
        $b1->setBolsa(12.5);
        $b1->setCurso("Administração");
        $b1->pagarMensalidade();
        $b1->renovarBolsa();
        print_r($b1);
        ?>
    </pre>
</body>

</html>