<div class="titulo">
        Retorno de funções
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);

            function sumLetter($a)
            {
                return function($b) use ($a)
                    {
                        return $a + $b;
                    };
            }
            echo sumLetter(13)(5);
        ?> 