<div class="titulo">
        Foreach
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);


            $days = [
                "Sunday",
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday"
             ];

             foreach ($days as $WeekDay) 
             {
                 $display->displayAndBroke($WeekDay);
             }

             echo "<br>";

             foreach ($days as $index => $WeekDay) 
             {
                 $display->displayAndBroke("index $index " . $WeekDay);
             }


        ?> 