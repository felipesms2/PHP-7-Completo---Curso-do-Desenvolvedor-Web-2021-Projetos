<div class="titulo">
        Funçoes Anonimas
    </div>
        <?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);

            $anonFunc = function ()
            {
                return 2*2;
            };

            $display->displayAndBroke($anonFunc());
            $display->dumpAndBroke($anonFunc);
        ?> 