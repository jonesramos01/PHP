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
    <pre>
    () 
    * / % 
    + - 
        
    </pre>
    
    <hr>

    <div id="operadores">
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

    <h2><u>Valores Personalizados (pedindo ao usuário para entrar com os dados):</u></h2>
    <pre>
        <!--
            1)Entrar com os valores na URL do documento
            Ex:
            //http://localhost/GitHub/jonesramos01/PHP/PHP-CEV/1.BASICO/3.operadores/1.aritm%c3%a9ticos/?a=3&b=2

        -->

    </pre>

    <div id="valPerso">
        <?php
        
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
        
        ?>    
    </div>

</body>
</html>