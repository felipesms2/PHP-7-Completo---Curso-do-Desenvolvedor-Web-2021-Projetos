<div class="titulo">
        Desafio Sorteio
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);

            $randomNames = array("rand1", "rand2", "rand3");
            $index = array_rand($randomNames);
            echo $randomNames[$index];

        ?> 