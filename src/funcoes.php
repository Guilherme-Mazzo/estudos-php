<?php


// funcoes => blocos de codigos que serao reutilizados
// funções -> blocos de código que podem ser reutilizados; só executam quando são chamadas: nomeDaFuncao();
// parâmetros -> valores que a função recebe entre os parênteses: function soma($a, $b)
// return -> devolve um valor para quem chamou a função (echo só mostra na tela, return entrega o valor)

// tipo de retorno -> o que vem depois dos ":" indica o que a função devolve
// : void  -> não devolve nada; a função só executa uma ação (ex: mostrar um texto com echo)
// : mixed -> pode devolver qualquer tipo (número, texto, array...)
// : int   -> devolve um número inteiro
// : string -> devolve um texto
// : bool  -> devolve true ou false
// se a função devolver um tipo diferente do indicado, o PHP mostra um erro


function boasVindas(): void {
    echo "Seja bem-vindo!<br><br>";
}

boasVindas();


function boasVindas2($nome): void {
    echo "Seja bem vindo $nome!<br><br>";
}

$nome = "Guilherme";
boasVindas2($nome);

function soma($a, $b): mixed {
    return $a + $b;
}

$resultado = soma(a: 4, b:4);

echo "O resultado foi $resultado<br><br>";


// funcoes da linguagem

$tamanho = strlen(string: "Este é o meu texto");

echo "O tamanho do texto é $tamanho<br><br>";

$cores = ["Azul", "Amarelo", "Verde"];

// vai adicionar um item no array
array_push($cores, "Vermelho");

// print_r melhora a visualização dos arrays
print_r($cores);






?>