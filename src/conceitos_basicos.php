<?php

    // comentarios com // 
    echo "Variaveis e tipos de dados <br><br>";

    /* 
        comentarios de multiplas linhas
    */
    
    // Variaveis
    $nome = "Guilherme";

    echo "Ola meu nome é $nome <br>";

    $sobrenome = "Mazzo";

    // O operador de concatenação é o ponto (.)
    $nomeCompleto = $nome . " " . $sobrenome;
    
    echo "O meu nome completo é $nomeCompleto <br>";

    //Tipos de dados
    //Inteiro
    // php não é uma linguagem tipada, então não é necessário declarar o tipo da variavel
    $idade = 32;

    echo "Eu tenho $idade anos <br>";

    $somaIdade = $idade + 5;

    echo "$somaIdade <br><br>";

    //floats - números quebrados
    $altura = 1.66;

    echo "Minha altura é $altura <br><br>";

    //boolean
    //verdadeiro ou falso

    $maiorIdade = true;

    $podeDirigir = false;

    echo "$maiorIdade <br><br>";

    //arrays - Listas
    $frutas = ["maça", "banana", "uva"];

    //indices - posições dos elementos de uma lista, começam do 0
    echo "Primeira fruta => $frutas[0]<br><br>";

    // Adicionando elementos a um array
    $frutas[] = "Abacaxi";

    echo "Quarta fruta => $frutas[3]<br><br>";


    // Operadores
    // +, -, *, /, %, **

    echo "Soma: ". (10+5)."<br><br>";

    $a = 12;
    $b = 2;

    echo "Subtração: " .($a - $b)."<br><br>";

    
    // comparadores
    // ==, ===, !=, <>, <, >, <=, >=

    // = -> atribuição
    // == -> igualdade
    // === -> identico. A diferença entre == e === é que o === compara o valor e o tipo da variável, enquanto o == compara apenas o valor da variável

    $c = "12";

    echo "igualdade:" . ($a == $c ? "Verdadeiro" : "Falso")."<br><br>"; //true


    // Operadores lógicos
    // && -> and -> se as duas condições forem verdadeiras, o resultado será verdadeiro
    // || -> or -> se uma das condições for verdadeira, o resultado será verdadeiro
    // ! -> not -> inverte o valor da condição

    $idade = 20;
    $temCarteira = false;

    echo "Deve tirar a carteira: " . (($idade >=18 && !$temCarteira) ? "Sim" : "Não") . "<br><br>";


    // Operadores de atribuição

    $saldo = 100;

    // $saldo = $saldo + 50;
    $saldo += 50;

    echo "Saldo: $saldo<br><br>";


?>
