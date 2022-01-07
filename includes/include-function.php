<div class="titulo">
        Include Função
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);


        function loadFile()
            {
                include "include_file.php";
                echo "<pre>" , var_dump($varInclude) , "</pre>";
            }

        loadFile();
            
        ?> 