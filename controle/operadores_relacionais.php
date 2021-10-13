<div class="titulo">Operadores Relacionais</div>
<?php

    var_dump(1==1);
    var_dump(1>1);
    var_dump(1=="1");
    var_dump(1==="1");
    var_dump(1!="1");
    var_dump(1!=="1");
    
    echo "<p class='divisao'>Relacionais no If/Else</p><hr>";
    $idade = 200;
    if($idade < 18) {
        echo "Menor de idade = $idade anos<br>";
    } elseif($idade <= 65) {
        echo "Adulto = $idade anos<br>";
    } else {
        echo "Terceira idade = $idade anos!";
    }

    echo '<p>Spaceship</p><hr>';
    var_dump(500 <=> 3);
    var_dump(50 <=> 50);
    var_dump(5 <=> 50);


    echo '<p>Valores pode ser V ou F</p><hr>';
    var_dump(!!5);
    var_dump(!!0);
    var_dump(!!"");
    var_dump(!!" ");


?>