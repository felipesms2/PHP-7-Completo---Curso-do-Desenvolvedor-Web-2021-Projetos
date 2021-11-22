<div class="titulo">
        Declarando Tipos
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);
            function somar(int $a, int $b )
            {
              return($a + $b);
            }
            
          function somarFloat(int $a, int $b ):int
            {
              return($a + $b);
            }
            
            
            echo "Resultado =" . somar(1,2) .  "<br> \n";
            echo "Resultado =" . somar(1.7,4.9) .  "<br> \n";
            echo "Resultado =" . somarFloat(1.7,5.5) .  "<br> \n";
          
        ?> 