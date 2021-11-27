<div class="titulo">
        Recursive Functions
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);

            function ShowNumber($value, $display)
            {
                $loopValues = "";
                if ($value <=10) 
                    {
                       $loopValues .= $display->displayAndBroke($value);
                       ShowNumber($value+1, $display);
                    }
                return $loopValues;
            }
            echo ShowNumber(1, $display);

            function FindFactorial($number, $display)
            {
                if ($number ==0) 
                
                    {
                        return 1;
                    }
                else
                    {
                        return $number * FindFactorial($number-1, $display);
                    }
            }

            $display->displayAndBroke("The factorial is of the given number is ". FindFactorial(5, $display));

        ?> 