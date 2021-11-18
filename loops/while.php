<div class="titulo">
        While e do While
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);


        $counterLimit = 10;
        $counterStart = 0;


        while ($counterStart <= $counterLimit) 
            {
                $display->displayAndBroke($counterStart);
                $counterStart++;
            }

        echo "<hr>";

            do
                {
                    $display->displayAndBroke($counterStart);
                }
                while ($counterStart <=$counterLimit);

        ?> 

