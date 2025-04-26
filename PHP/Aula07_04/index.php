<?php

    function Grupo(){
        echo ('Guilherme B</br>');
        echo ('Guilherme</br>');
        echo ('Luis</br>');
        echo ('Mauricio</br>');
        echo ('Rafael</br>');
        echo ('Vinicius</br>');
        echo ('Vitor</br>');
    }

    Grupo();

    function Tabuada($num1, $num2){
        $inicio = 1;
        echo ("</br>");
        while ($inicio <= $num2){
            $mult = $num1 * $inicio;
            echo ("$mult </br>");
            $inicio++;
        }
    }


    $primeiro = 82; // Numero que vai ser multiplicado
    $segundo = 20; // Quantidade de vezes a ser multiplicado

    Tabuada($primeiro, $segundo);


    function SomaSimples($num1, $num2){
        echo("</br>");
        $soma = $num1 + $num2;
        echo($soma);
    }

    $pri = 20;
    $seg = 30;

    SomaSimples($pri, $seg);
    
    ?>