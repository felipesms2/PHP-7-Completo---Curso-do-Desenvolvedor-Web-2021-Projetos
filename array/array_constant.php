<div class="titulo">
        Array Constant
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);
            const FRUITS = ['RaspBerry', 'Carrot'];
            $display->dumpAndBroke(FRUITS[1]);
        ?> 