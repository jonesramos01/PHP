<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPERADORES DE ATRIBUIÇÃO</title>
</head>
<body>
    <h1>OPERADORES DE ATRIBUIÇÃO:</h1>
    <hr>
    <pre>
    $a = 1;
    $b = 3;
    $c = $a + $b;
    $c = $c + 4; → $c += 4;
    $b = $b + $a; → $b += $a;
    $a = $a + 1; → $a += 1; → $a++;

    OPERADORES DE ATRIBUIÇÃO:

    ADIÇÃO: $a = $a + $b; → $a += $b; 
    SUBTRAÇÃO: $a = $a - $b; → $a -= $b;
    MULTIPLICAÇÃO: $a = $a * $b; → $a *= $b;
    DIVISÃO: $a = $a / $b; → $a /= $b;
    MÓDULO: $a = $a % $b; → $a %= $b;
    CONCATENAÇÃO: $a = $a . $b; → $a .= $b;

    EXERCÍCIOS:
    1)Aplicar 10% de aumento no preço de um produto
    2)Aplicar 10% de desconto no preço de um produto
    
    </pre>
    <hr>

    <?php

    $preco = $_GET["preco"];
    echo "O preço do produto é R$ $preco"; //Obs: Lembrar de acrescentar na URL: Ex: ".../index.php?preco=100"

    //$preco = $preco + ($preco * 10/100);
    //echo "<br>O produto com aumento de 10% sai a R$ $preco";

    $preco = $preco - ($preco * 10/100);
    echo "<br>O produto com desconto de 10% sai a R$ $preco";

    
    
    
    
    
    
    ?>


</body>
</html>