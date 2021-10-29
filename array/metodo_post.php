<div class="titulo">
        Método Post
    </div>
        <?php
            include("customClass.php");
            $display = new excercise(); 
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);

        ?> 

    <form action="#" method="post">
        Name <input type="text"> <br>
        Age <input type="number"> <br>
        <input type="submit" value="Send">
    </form>

    <?php

        if(isset($_POST))
            {
               $display->dumpAndBroke($_POST);
               $display->dumpAndBroke($_GET);
            }

    ?>
        