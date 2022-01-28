<div class="titulo">
        Session
    </div>
        <?php
        session_start();
        include("customClass.php");
        $display = new excercise();
        //$display->displayAndBroke($status);
        //$display->dumpAndBroke($status);
        $display->dumpAndBroke($_SESSION);

        if (!isset($_SESSION['name'])) 
            {
                $_SESSION['name'] = "Felipe";
            }
        $display->dumpAndBroke($_SESSION);
        //session_destroy();

        ?>

    <a href="./session-cookies/change-session.php">
        Change Session
    </a>
        