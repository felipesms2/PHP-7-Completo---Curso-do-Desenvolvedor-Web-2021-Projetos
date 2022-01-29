<div class="titulo">
        Managing Session
    </div>
        <?php
            //session_id("coui66dnhlokjbq5j5qsk83c09");
            session_start();
            echo session_id();
            $counter = &$_SESSION['counter'];
            $counter = $counter ?  $counter+1 : 1; 

            if ($counter %5 ===0) 
                {
                    session_regenerate_id();
                }

            include("customClass.php");
            $display = new excercise();
            $display->displayAndBroke("<br>");
            $display->displayAndBroke($counter);
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);

