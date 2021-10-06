<div class="titulo">Variaveis</div>

<?php
    $numeroA = 13;
    echo $numeroA, "<br>";
    var_dump($numeroA);

    echo "<br>";

    $a = 13;
    $b = 16;
    $soma = $a + $b;
    echo $soma;
    echo "<br>";
    $somadosnumeros =0;
    echo isset($somadosnumeros);
    echo "<br>";
    unset($somadosnumeros);
    var_dump($somadosnumeros);
    $variavel = 10;
    echo "<br> $variavel";
    $variavel = "Agora sou uma string";
    echo "<br> $variavel";

    //Var Names

    $var = "valid";
    $var2 = "valid";
    $VAR3 = "valid";
    $_var = "valid";
    $_v4ar = "valid";
    //starting with number or % is invalid
    //End with  % is invalid
    //Dash case is invalid

echo "<br>";

echo "<pre>", var_dump($_SERVER), "</pre>";


?>