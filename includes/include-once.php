<div class="titulo">
        Include Once
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);

            include("include-once-file.php");

            $display->displayAndBroke($varInclude);
            $varInclude = "I'm changed";
            $display->displayAndBroke($varInclude);
            include("include-once-file.php");
            $display->displayAndBroke($varInclude);
            $varInclude = "I'm changed";
            $display->displayAndBroke($varInclude);
            include_once("include-once-file.php");
            $display->displayAndBroke($varInclude);
            
        ?> 