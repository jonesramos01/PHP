<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VARIÁVEIS</title>
    <style>
        body{
            background-color: rgb(79, 91, 147);
            color: white;
        }
    </style>
</head>
<body>
    <h1>VARIÁVEIS</h1>
    <hr><br>
    <?php
        echo "Hello World! <br>"; //echo é similar ao escreva do algoritmo
        //echo: print e printf

        echo "Pular de linha <br>";

        echo "<h1>Títulos</h1>";

        echo "<p>Parágrafos</p>";

        //VARIÁVEIS:
        //$idade = 3;
        //$salario = 5,000.00
        //$nome = "Pedro";
        //$casado = true;

        //NO PHP NÃO EXISTE DECLARAÇÃO DE VARIÁVEIS. O PHP JÁ RECONHECE OS DADOS QUE ENTRAM NO CÓDIGO.

        //O PHP É COMPATÍVEL COM OS TIPOS PRIMITIVOS DE VARIÁVEIS.
        
        //VARIÁVEIS NO PHP:
        
        //INTEIRO (int), (integer)
        //REAL (real), (float), (double)
        //CARACTERE (string)
        //LÓGICO (não existe tipo lógico):
        //true = 1
        //false = vazio
        //Obs: Variáveis sempre em letra minúscula

        echo "<u>TESTES COM VARIÁVEIS:</u><br>";

        $num = 11;        
        $nome = "André";

        echo $num;

        echo $nome;

        echo "<u>CONCATENAÇÃO:</u><br>";

        $nome = "João";
        $idade = 22;

        echo $nome;
        echo $idade;
        echo $nome. " tem ". $idade. " anos!";
        //Ou:
        echo "$nome tem $idade anos!";

    ?>
    
</body>
</html>