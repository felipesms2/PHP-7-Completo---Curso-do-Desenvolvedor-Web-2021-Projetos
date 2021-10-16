<div class="titulo">
    Operadores Lógicos
</div>

<style>

.boldP
    {
        font-weight: bold;
    }

</style>
<?php
    include("customClass.php");
    $display = new excercise();
    $display->dumpAndBroke(true);
    $display->dumpAndBroke(!!!!true);
    $display->dumpAndBroke(!true);
    echo "<hr>";
    echo"<p>
        <span class='boldP'>
            Tabela Verdade And
        </span>
    <br>
    <br>
    ";

    $display->dumpAndBroke(true && false);
    $display->dumpAndBroke(true AND true);
    $display->dumpAndBroke(false AND false);
    $display->dumpAndBroke(true AND 3>2 && 7 <=7);

    echo "</p>";

    echo"<p>
        <span class='boldP'>
            Tabela Verdade OR
        </span>
    <br>
    <br>
    ";

    $display->dumpAndBroke(true or false);
    $display->dumpAndBroke(false || true);
    $display->dumpAndBroke(false || false);

    echo "<p>";


    echo"<p>
        <span class='boldP'>
            Tabela Verdade XOR (Ou exclusivo)
        </span>
    <br>
    <br>
    ";

    $display->dumpAndBroke(true or false);
    $display->dumpAndBroke(false || true);
    $display->dumpAndBroke(false || false);

    echo "<p>";
    

?>