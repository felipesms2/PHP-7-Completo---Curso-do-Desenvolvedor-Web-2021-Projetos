<div class="titulo">
        Require && Return
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);

            $returnedValue = require("return-used.php");
            $returnedValue2 = require(__DIR__ . "/return-not-used.php");
            $display->displayAndBroke($returnedValue);
            $display->displayAndBroke(__DIR__);
            $display->displayAndBroke($returnedValue2);
            $display->displayAndBroke($justDeclared);
         
        ?> 