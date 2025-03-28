<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP</h1>
    <h2>Tipo de Dados</h2>
    <p>Os tipos de dados em PHP são</p>
    <ul>
        <li>Integer</li>
        <li>String</li>
        <li>Float</li>
        <li>Boolean</li>
        <li>Array</li>
        <li>Object</li>
        <li>NULL</li>
        <li>Resourse</li>
    </ul>

    <?php
    
    echo "<h4>Interger</h4>";
    $ex1 = 10;
    echo var_dump($ex1);
    
    echo "<h4>String</h4>";
    $ex2 = "PHP";
    echo var_dump($ex2);
    
    echo "<h4>Float</h4>";
    $ex3 = 10.4;
    echo var_dump($ex3);

    echo "<h4>Boolean</h4>";
    $ex4 = true;
    echo var_dump($ex4);

    echo "<h4>Array</h4>";
    $ex5 = ["Zé", "Tunico", 3, false, 5.6];
    echo var_dump($ex5);
    
    echo "<h4>Array</h4>";
    class Pessoa {}
    $pessoa1 = new Pessoa;
    echo var_dump($pessoa1);

    echo "<h4>NULL</h4>";
    $ex6;
    echo var_dump($ex6);


    echo "<h4>Resourse </h4>";
    echo "<h4>Usado para fazer chamadas de conexões
    de banco de dados </h4>";
    
    echo "<h4>Manipulação de strings</h4>";
    echo "<h4>Texto em caixa alta</h4>";
    $text1 = "de caixa baixa para caixa alta ";
    echo strtoupper($text1);
    
    echo "<h4>Texto em caixa baixa</h4>";
    $text2 = "DE CAIXA ALTA PARA CAIXA BAIXA ";
    echo strtolower($text1);
    
    echo "<h4>Comprimento da palavra</h4>";
    $text3 = "Água";
    $text4 = "Agua";
    echo strlen($text3) . "<br>"; // por conta de ter acento ele conta o acento como mais um caracter
    echo strlen($text4);
    
    echo "<h4>Contagem de palavras</h4>";
    $text5 = "A água pura";
    $text6 = "A agua pura";
    echo str_word_count($text5) . "<br>";
    echo str_word_count($text6) . "<br>";
    
    echo "<h4>Índice da ocorrência</h4>";
    $text7 = "O gato pulou a cerca";
    $posicao = strpos($text7, "gato");
    echo $posicao;

    echo "<h4>Capturar uma parte da string</h4>";
    echo substr($text7, $posicao, 4);
    
    echo "<h4>Fatiando de acordo com um critério</h4>";
    print_r(explode(" ",$text7));
    
    ?>
</body>
</html>

