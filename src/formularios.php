<?php
    /*
     * Saudação personalizada via URL
     * --------------------------------------------------------------
     * Este script lê o parâmetro "nome" enviado pela URL (método GET)
     * e exibe uma mensagem de boas-vindas com esse nome.
     *
     * Exemplo de uso:
     *   pagina.php?nome=Guilherme
     *   -> Saída: "Olá, seja bem vindo Guilherme"
     *
     * Se o parâmetro "nome" não for informado, nada é exibido.
     */

    // $_GET - É uma lista que o PHP preenche sozinho com os parâmetros que vêm na URL depois do ?
    //  isset() - Na prática, é perguntar: "Veio um parâmetro chamado 'nome' na URL?"
    // Na prática, é perguntar: "Veio um parâmetro chamado 'nome' na URL?"
    // Ela evita erro: se você tentar ler $_GET['nome'] quando o parâmetro não existe, o PHP mostra um aviso (Warning: Undefined array key).

    // Verifica se o parâmetro "nome" foi enviado na URL
    if (isset($_GET['nome'])) {

        // Guarda o valor recebido na variável $nome
        $nome = $_GET['nome'];

        // Exibe a mensagem de boas-vindas com o nome recebido
        echo "Olá, seja bem vindo $nome";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu formulário</title>
</head>
<body>

    <h2>
        Exemplo formulário
    </h2>

<!--
    ==============================================================
    FORMULÁRIO DE SAUDAÇÃO
    ==============================================================
    Envia o nome digitado para "formularios.php", que lê o valor
    com $_GET['nome'] e exibe a mensagem de boas-vindas.

    Ao clicar em Enviar, o navegador abre:
        formularios.php?nome=ValorDigitado
-->

<!--
    <form>
    Tipo: elemento HTML (caixa que agrupa os campos)
    Junta todos os campos que serão enviados juntos. Tudo que está
    entre <form> e </form> faz parte do mesmo envio.

    Atributos:
      action="formularios.php"
        Para onde os dados vão: o arquivo que vai recebê-los.
        Se ficar vazio, envia para a própria página.

      method="GET"
        Como os dados vão. No GET, eles vão na URL.

    GET x POST:
      GET  -> dados na URL (visíveis)
              No PHP: $_GET['nome']
              Bom para buscas, filtros e links que dá para compartilhar
              Tem limite de tamanho (a URL tem limite)

      POST -> dados no "corpo" da requisição (escondidos da URL)
              No PHP: $_POST['nome']
              Bom para senhas, cadastros e dados sensíveis
              Limite de tamanho bem maior

    Atenção: escondido da URL não quer dizer seguro. O POST não
    criptografa nada. Quem protege os dados no caminho é o HTTPS.
-->
<form action="formularios.php" method="GET">

    <!--
        <label>
        Tipo: elemento HTML (rótulo)
        É o texto que descreve o campo ("Seu nome:").

        Atributo:
          for="nome"
            Liga o rótulo ao campo que tem id="nome".

        Essa ligação faz duas coisas:
          1. Clicar no texto foca o campo (ajuda muito no celular).
          2. Leitores de tela para pessoas cegas leem o rótulo quando
             o campo é selecionado (acessibilidade).
    -->
    <label for="nome">Seu nome:</label>

    <!--
        <input>
        Tipo: elemento HTML (campo de entrada)
        É onde o usuário digita. Não tem tag de fechamento.

        Atributos:
          type="text"
            Tipo do campo: texto livre, em uma linha.
            Outros tipos comuns: email, password, number, date,
            checkbox, radio, hidden.

          id="nome"
            Identificador único na página.
            Usado pelo label, por CSS e por JavaScript.

          name="nome"
            Nome com que o dado é enviado ao servidor.
            É ele que vira $_GET['nome'] no PHP.

        id x name:
          id   -> serve para a PÁGINA (HTML, CSS, JS)
          name -> serve para o SERVIDOR (PHP)
          Sem name, o campo NÃO é enviado, mesmo que tenha id.
          Aqui os dois se chamam "nome" por conveniência, mas
          poderiam ser diferentes.
    -->
    <input type="text" id="nome" name="nome">

    <!--
        <button>
        Tipo: elemento HTML (botão)

        Atributo:
          type="submit"
            Ao clicar, envia o formulário para o endereço do action.

        Outros tipos:
          type="reset"  -> limpa os campos
          type="button" -> não faz nada sozinho (usado com JavaScript)

        Observações:
          Dentro de um <form>, um <button> sem type é "submit" por padrão.
          Apertar Enter dentro do campo também envia o formulário.
    -->
    <button type="submit">Enviar</button>

</form>
    
</body>
</html>

