<!DOCTYPE *html*>

<html *lang*="pt-BR">

<head>

    <meta *charset*="utf-8">

    <title> Fundamentos do PHP </title>

    <link *rel*="stylesheet" *href*="formata-formulario.css">

</head>

<body>

    <h1> Fundamentos do PHP - listaL1 - exercicio5</h1>

    <?php

    $valorCompra = $_POST['valor-compra'];

    // recebendo os dados da forma de pagamento (botões rádio)
    
    $formaPagamento = $_POST['forma-pagamento'];

    // recebendo os dados da forma de entrega (botões rádio)
    
    $formaEntrega = $_POST['forma-entrega'];

    // variaveis desconto e acrescimo.
    
    $desconto = 0;

    $acrescimo = 0;

    // descobrindo se o cliente pagou ou não com cartão e calculando o valor do acrescimo.
    
    if ($formaPagamento == 'sim') {

        $desconto = $valorCompra * 5 / 100;

    }

    // descobrindo se o cliente solicitou entrega domicilio calculando o valor do acrescimo.
    
    if ($formaEntrega == 'sim') {

        $acrescimo = $valorCompra * 2 / 100;

    }

    // calculando o valor final da compra
    
    $valorFinalCompra = $valorCompra - $desconto + $acrescimo;

    echo "<p> Resultado da compra: <br>

Valor inicial da compra - <span> R$$valorCompra </span> <br>

Desconto = <span> R$$desconto</span><br>

Acrescimo = <span> R$$acrescimo</span><br>

Valor final da compra = <span> R$$valorFinalCompra</span><br>

</p>

"

        ?>

</body>

</html>