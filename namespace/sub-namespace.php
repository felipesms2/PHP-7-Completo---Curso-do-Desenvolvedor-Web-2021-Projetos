<?php namespace App; ?>
<div class="titulo">
        Sub Namespace
    </div>
        <?php
            include("customClass.php");
            $display = new \excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);

            $display->displayAndBroke(__NAMESPACE__);
            namespace App\Main;
            $display->displayAndBroke(__NAMESPACE__);
            namespace App\Main\Specifc;
            $display->displayAndBroke(__NAMESPACE__);
        ?> 