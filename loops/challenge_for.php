<div class="titulo">
        Desafio For
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);
            

            $start = "";
            
            for($start == "#"; $start !="####"; $start .="#")
                {
                  $display->displayAndBroke($start);
                }

        ?> 