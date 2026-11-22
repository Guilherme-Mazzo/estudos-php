<?php

    echo"Estruturas condicionais <br><br>";

    // estruturas que usam operadores e comparações
    // para atingir resultados diferentes no programa

    // if, else, elseif

    $idade = 20;

    // if (COMPARAÇÃO -> BOOLEAN) {TRUE -> EXECUTA O BLOCO DE CÓDIGO}
    if($idade >=19) {
        echo "Você é maior de idade <br>";

    }

    // executo quando o if da falso
    // else{ // executa se falso}

    $salario = 1000;

    if($salario > 2000) {
        echo "Seu salario é bom <br><br>";
    } else {
        echo "Seu salario é baixo <br><br>";
    }

    // if -> executa se a operação for verdadeira
    // else -> se o if for falso

    // else if CONDIÇÃO INTERMEDIARIA
    // IF, ELSE IF, ELSE

    $nota = 7.5;

    if($nota > 9) {
        echo "Voce tirou uma nota alta <br><br>";
    } elseif($idade > 7) {
        echo "Sua nota foi boa<br><br>";
    } else {
        echo "Voce tirou uma nota baixa";
    }
    




?>