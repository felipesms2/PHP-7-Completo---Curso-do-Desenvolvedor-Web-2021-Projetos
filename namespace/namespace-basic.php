<?php namespace contextName ; ?>
<div class="titulo">
        Namespace Básico
    </div>
        <?php
            include("customClass.php");
            $display = new \excercise();
            $display->displayAndBroke(__NAMESPACE__);
            const constant1 = 123;
            define("contextName\constant2", 234);
            define( __NAMESPACE__ . "\constant3" , 345);
            define("\otherContext\constant1" , "OtherContext");
            $display->dumpAndBroke(constant1);
            $display->dumpAndBroke(constant2);
            $display->dumpAndBroke(\contextName\constant3);
            $display->dumpAndBroke(constant3);
            
        ?> 