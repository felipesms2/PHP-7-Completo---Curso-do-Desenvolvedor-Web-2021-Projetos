<div class="titulo">
        Error Handler
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            function zeroDivision()
                {
                    $zeroDivision = 4/0;
                    return $zeroDivision;
                }

            error_reporting(E_ERROR);
            $display->displayAndBroke(zeroDivision());
            error_reporting(E_ALL);
            $display->displayAndBroke(zeroDivision());

            echo "<hr>";

            error_reporting(~E_ALL);

            $display->displayAndBroke(zeroDivision());

            error_reporting(E_ALL);

            $display->displayAndBroke(zeroDivision());


            function messageFilter($errNumber, $errString)
                {
                    $text  = "include";
                    return !!stripos(" $errString", $text);
                }

            set_error_handler('messageFilter', E_WARNING);

            echo "<hr>";
            $display->displayAndBroke(zeroDivision());
            include("unexistingfile.php");
            echo "<hr>";
            restore_error_handler();
            $display->displayAndBroke(zeroDivision());
            include("unexistingfile.php");            