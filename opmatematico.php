<?php
    #OP MATEMÁTICOS
    # + - * / %
    #CALCULO DE MÉDIA
    $n1 = 8;
    $n2 = 10;
    $n3 = 6.5;

    $media = (($n1 + $n2 + $n3) / 3);
    echo($media);

    #MOD OU MÓDULO
    echo("<br><br>");
    $numero1 = 11;
    $numero2 = 2;

    echo($numero1 % $numero2);

    echo("<br><br>");

    $numero = 16;
    
    $retorno = ($numero %2);
    if($retorno == 1)
    {
        echo("É ÍMPAR");
    }
    else
    {
        echo("É PAR");
    }
?>