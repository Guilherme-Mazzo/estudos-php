<?php

    echo "Laços/estruturas de repetição <br><br>";

    //while, do while, for

    // for(INICIALIZAÇÃO; CONDIÇÃO; INCREMENTO) {BLOCO DE ALGUM CODIGO}

    for($i = 0; $i <= 10; $i++) {
        if($i > 5 ) {
            echo "opa!!!!";
        }
        echo "numero $i <br><br>";
    }

    for($j = 20; $j > 10; $j-= 2) {
        echo "Dominuindo J $j <br><br>";
    }

    //while

// No while, o começo fica antes, a condição fica no while, e o incremento fica dentro, no final do bloco.
// A palavra while em inglês quer dizer "enquanto". Então dá pra ler assim:
// "Enquanto o contador for menor ou igual a 10, mostra o número e soma 1."
    
    // iniciador
    $contador = 1;

    //condição
    while($contador <= 10) {

        echo "Número $contador <br><br>";

        // incremento
        $contador++;
    
    }



    //foreach -> array
    // foreach -> percorre cada item de um array, um de cada vez
    // foreach ($lista as $item) -> "para cada item da lista, chame-o de $item"
    // para sozinho quando a lista acaba (não precisa de contador, condição ou ++)

    $frutas = ["Maça", "uva", "banana", "laranja"];

    foreach($frutas as $fruta) {
        echo "Fruta $fruta <br><br><br>";

    }

    // arrays associativos chave =>  valor

    // array associativo -> lista em que cada item tem um nome (chave) em vez de número de posição
    // chave => valor -> o "=>" liga o nome ao valor ("Matheus guarda 3000")
    // acessar um valor: $array['chave'] -> ex: $pessoas['Matheus']
    // as chaves não podem se repetir (a última substitui a anterior); os valores podem
    // percorrer tudo: foreach ($array as $chave => $valor)
    // aspas simples ou duplas funcionam nas chaves; duplas só são necessárias se tiver variável dentro do texto


    $pessoas = [
        'Matheus' => 3000,
        'Maria' => 5000,
        'João' => 5000
    ];

    echo '->' . $pessoas['Matheus'] . "<br><br>";

    foreach($pessoas as $pessoa => $salario) {
        echo "dados: $pessoa ganha $salario <br><br>";
    }



?>