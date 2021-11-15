<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPERADORES ARITMÉTICOS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>OPERADORES ARITMÉTICOS:</h1>
    <hr>
    <h2><u>Operadores:</u></h2>

    <p>Adição: <strong>+</strong></p>
    <p>Subtração: <strong>-</strong></p>
    <p>Multiplicação: <strong>*</strong></p>
    <p>Divisão: <strong>/</strong></p>
    <p>Módulo (resto da divisão): <strong>%</strong></p>

    <h2><u>Ordem de prescedência:</u></h2>

    <p>( )</p> 
    <p>* / %</p> 
    <p>+ -</p> 
    
    <hr>

    <div id="operadoresAritmeticos">
        <?php
        /*

        echo "Ex: Operadores <br><br>";

        $n1 = 4;
        $n2 = 2;
        $s = $n1 + $n2;
        $sub = $n1 - $n2;
        $mult = $n1 * $n2;
        $div = $n1 / $n2;
        $mod = $n1 % $n2;

        echo "n1 = 4 <br>"; 
        echo "n1 = 2 <br><br>";
        
        echo "A soma entre $n1 e $n2 é: <strong>$s</strong> <br>";
        echo "A subtração entre $n1 e $n2 é: <strong>$sub</strong> <br>";
        echo "A multiplicação entre $n1 e $n2 é: <strong>$mult</strong> <br>";
        echo "A divisão entre $n1 e $n2 é: <strong>$div</strong> <br>";
        echo "O módulo (resto da divisão) entre $n1 e $n2 é: <strong>$mod</strong> <br>";
        
        */
        ?>

    </div>     
    
    <hr>

    <div id="soma">
        <?php
        /*

        echo "Ex: Soma <br><br>";

        //1)Criação das variáveis:
        $n1 = 3;
        $n2 = 2;
        $s = $n1 + $n2;
        
        //2)Aparecer na tela do navegador:
        echo "n1 = 3 <br>"; 
        echo "n2 = 2 <br><br>";

        echo "A soma entre $n1 e $n2 vale <strong>$s</strong> <br>";

        */
        ?>
    </div>
    
    <hr>
    
    <div id="media">
        <?php
        /*
        echo "Ex: Média <br><br>";

        $n1 = 7;
        $n2 = 7;
        $m = ($n1 + $n2) / 2;

        echo "n1 = 7 <br>";
        echo "n2 = 7 <br><br>";

        echo "A média entre $n1 e $n2 é: <strong>$m</strong>";

        */
        ?>

    </div>

    <hr>

    <h2> · <u>VALORES PERSONALIZADOS (pedindo ao usuário para entrar com os dados):</u></h2> 
    
    <hr>

    <div id="valoresPersonalizados">
        <?php
            /*

            //1ª OPÇÃO (Básico): Entrar com os valores na URL do documento
            //Ex:
            //http://localhost/.../index.php?a=3&b=2
            
            //Obs:Neste caso, sempre que for alterar o valor da variável, alterar direto na URL do documento.
            
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            
            echo "n1 = $n1 <br>";
            echo "n2 = $n2 <br><br>";

            echo "Valores recebidos: $n1 e $n2 <br><br>";

            echo "A soma entre n1 e n2 é: ". ($n1 + $n2);
            echo "<br>A subtração entre n1 e n2 é: ". ($n1 - $n2);
            echo "<br>A multiplicação entre n1 e n2 é: ". ($n1 * $n2);
            echo "<br>A divisão entre n1 e n2 é: ". ($n1 / $n2);
            echo "<br>O módulo (resto da divisão) entre n1 e n2 é: ". ($n1 % $n2);

            */
        ?>    
    </div>

    <h2><u>Funções Aritméticas:</u></h2>

    <p>Valor Absoluto: <strong> abs() </strong></p>
    <p>Potenciação: <strong> pow() </strong></p>
    <p>Raiz Quadrada: <strong> sqrt() </strong></p>
    <p>Arredondamento: <strong> round() </strong></p>
    <p>Valor Inteiro da Variável: <strong> intval() </strong></p>
    <p>Formatação: <strong> number_format() </strong></p>

    <hr>

    <div id="funcoesAritmeticas">
        <?php
        /*

        //1ª OPÇÃO (Básico): Entrar com os valores na URL do documento
            //Ex:
            //http://localhost/.../index.php?a=3&b=2

        $v1 = $_GET["x"];
        $v2 = $_GET["y"];

        echo "v1 = $v1 <br>";
        echo "v2 = $v2 <br><br>";

        echo "Valores recebidos: $v1 e $v2 <br><br>";

        echo "O valor absoluto de $v2 é: ". abs($v2);
        echo "<br>A potencia de $v1<sup>$v2</sup> é: ". pow($v1, $v2);
        echo "<br>A raiz quadrada de $v1 é: ". sqrt($v1);
        echo "<br>O arredondamento de $v2 é: ". round($v2);
        echo "<br>O valor inteiro de $v2 é: ". intval($v2);
        echo "<br>A formatação de $v1 em moeda é R$ ". number_format($v1, 2, ",", ".");
        
        */
        
        ?>
    </div>

</body>
</html>