    <div class="titulo">
        Loop For
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);
            
            for($count = 1; $count <= 5; $count++) 
            {
                $display->displayAndBroke($count);
            }

            $display->displayAndBroke("");

            $count =0;
            for($count>0 ; $count <= 15; ) 
            {
                $display->dumpAndBroke($count);
                $count++;
            }

            $count = 0;
            
            while ($count < 10)
                {   
                    $display->displayAndBroke($count);
                    $count++;
                }

        ?> 