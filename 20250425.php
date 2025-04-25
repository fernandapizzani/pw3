<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>25/04/2025</title>
    <style> .container{ display: grid; grid-template-columns: auto auto}</style>
</head>
<body>
    <h1>Math</h1>
    <?php
        echo pi().'<br>'; // printa o pi

        // max e min
        echo "<h2>Função máximo e minimo</h2>";
        echo min(4,2,7,5). "<br>";
        echo max(4,2,7,5). "<br>";
         
        // raiz quadrada
        echo "<h2>Raiz quadrada</h2>";
        echo sqrt(100);

        // arredondamento
        echo "<h2>Função Round</h2>";
        echo round(0.49). "<br>";
        echo round(0.51). "<br>";
        echo round(0.5). "<br>";
        
        // gerador de números
        echo "<h2>Números Aleatórios</h2>";
        echo rand(). "<br>";
        echo rand(10,100). "<br>"; // limite, começa no 10 termina no 100, vc escolhe

        ?>

    <h1>Constantes</h1>
    <p>O nome da constante não pode começar com $</p>
    <p>As constantes têm acesso global no script. Sintaxe</p>
    <p> <code>define(nome, valor)</code> </p>
        
    <?php
    define('alerta', 'Estoque Baixo');
    $qtde = rand() % 15;
    if($qtde <= 10)
        echo alerta;

    ?>

    <h2>Constante Array</h2>
    <?php
    
        define("carro", ["Fox", "Uno", "Gol"]);
        echo carro[2];

    ?>

    <h2>Constantes mágicas</h2>
    <div class="container">
        <div>Constante</div>
        <div>Descrição</div>
        <div>__CLASS__</div>
        <div>Dentro da classe, retorna no nome da classe.</div>
        <div>__DIR__</div>
        <div>Retorna o nome do diretório.</div>
        <div>__FILE__</div>
        <div>Retorna o caminho completo e o nome do arquivo.</div>
        <div>__FUNCTION__</div>
        <div>Se dentro de uma função, retorna o nome da função.</div>
        <div>__LINE__</div>
        <div>Retorna o número da linha atual.</div>
        <div>__METHOD__</div>
        <div>Se dentro de uma função que pertence a uma classe,
         retorna o nome da classe e da função.</div>
        <div>__NAMESPACE__</div>
        <div>Se dentro de um namespace, retorna o nome do namespace.</div>
        <div>__TRAIT__</div>
        <div>Se dentro de uma trait, retorna seu nome.</div>
        <div>ClassName::Class</div>
        <div>Retorna o nome de uma classe específica e o nome do namespace se houver.</div>
    </div>

    <?php 
    
        class Saco{
            function MostraCapacidade(){
                echo __CLASS__;
            }
        }

        $saco = new Saco;
        $saco -> MostraCapacidade();

    ?>
</body>
</html>