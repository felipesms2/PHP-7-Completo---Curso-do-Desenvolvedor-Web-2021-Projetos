    <div class="titulo">
        Break e continue
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);
            
            $counter = 10;
            for (;;) 
            {
              $counter++;
              $display->displayAndBroke($counter);
              
              if ($counter >20) 
              {
                break;// code...
              }
            }
            $counter = 1;
            for (;;) 
            {
              $counter++;
              if ($counter % 2 ===1) 
              {
                 $display->displayAndBroke($counter);
              }
              
              
              if ($counter >40) 
              {
                break;// code...
              }
            }
            
            
            
        ?> 