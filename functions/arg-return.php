<div class="titulo">
        Argumentos e Retornos
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);

            function helloUname()
            {
               return "Hello unknow people!";
            }

            function helloNamed($name)
            {
                return "Hello $name" ;
            }

                $display->displayAndBroke(helloUname());
                $display->displayAndBroke(helloNamed("Felipe"));

        ?> 