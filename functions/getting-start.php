<div class="titulo">
        Funções Escopo
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);

        $toChange = 1;

         function ToChange($display)
            {
                $toChange = 2;
                $display->dumpAndBroke("Current value is $toChange");
            }

            $display->displayAndBroke("Previous value is $toChange");
            ToChange($display);

           $display->displayAndBroke("Actualli toChange is $toChange");
    
            function staticChange()
                {
                    global $toChange;
                    $toChange = 4;
                }

            staticChange();
            $display->displayAndBroke("toChange is changed to $toChange");

        ?> 