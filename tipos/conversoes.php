<div class="titulo">
    Conversões
</div>
<?php

    echo is_int(PHP_INT_MAX) . "<br>";  
    var_dump(PHP_INT_MAX +1); /*Automattically goes to float*/
    echo "<br>";
    var_dump(1 +1.0) . "<br>"; /*Automattically goes to float*/
    echo "<br>";
    var_dump((float) 3); //conversion explicity

    echo "<p>Float para int</p>";

    var_dump((int) 2.8);
    echo "<br>";
    var_dump(intval(2.8, 10));
    echo "<br>";
    var_dump((int) round(2.8));

    echo "<p>Operações String</p>";
    var_dump(3 + "2");
    echo "<br>";
    echo is_string("3" . 2);


?>