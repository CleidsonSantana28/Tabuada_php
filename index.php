<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>tabuada</title>
</head>
<body>
    <section id="sub">
    <ul>
        <?php
        for($i=1; $i<=10; $i++){
            for($j=0; $j<=10; $j++){
                ?>
                <li><?= $i?>-<?= $j; ?>=<?=($i-$j);?></li>
                <?php
            }
            echo "<br><hr>";
            echo "<br>";
        }
        ?>
    </ul>
    </section>

    <section id="soma">
    <ul>
        <?php
        for($i=1; $i<=10; $i++){
            //echo "<hr>";
            for($j=0; $j<=10; $j++){
                ?>
                <li><?= $i?>+<?= $j; ?>=<?=($i+$j);?></li>
                <?php
            }
            echo "<br><hr>";
            echo "<br>";
        }
        ?>
    </ul>
    </section>

    <section id="mult">
    <ul>
        <?php
        for($i=1; $i<=10; $i++){
            for($j=0; $j<=10; $j++){
                ?>
                <li><?= $i?>*<?= $j; ?>=<?=$i*$j?></li>
                <?php
            }
            echo "<br><hr>";
            echo "<br>";
        }
        ?>
    </ul>
    </section>

    <section id="div">
    <ul>
        <?php
        for($i=1; $i<=10; $i++){
            for($j=0; $j<=10; $j++){
                ?>
                <li><?= $i?>/<?= $j; ?>=<?=number_format(($i/$j),2)?></li><!--  number_format($var, 2) mostra o numeros de casas decimais depois da virgula-->
                <?php
            }
            echo "<br><hr>";
            echo "<br>";
        }
        ?>
    </ul>
    </section>
    
</body>
</html>