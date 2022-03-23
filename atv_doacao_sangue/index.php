<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade de Doação de Sangue</title>
</head>

<body>

    <h1>Análise de doador de Sangue</h1>
    <hr>
    <?php

    $idade = 18;
    $peso = 40;

    if ($idade >=16 || $idade<= 69){
    } if ( $peso > 50) {
        echo "Pode doar";
    } elseif ( $idade<16 || $idade>69){
        echo "Não pode doar por conta da idade";
    } elseif ( $peso < 50 ){
        echo "Não pode doar por conta do peso";
    }
    //ifs.......
    /**
     * Se idade >= 16 E idade <= 69
     *  if peso > 50
     *      pode doar
     *  se não
     *      não pode doar por conta do peso
     * senão
     *  não pode doar por conta da idade
     */

    ?>
</body>

</html>