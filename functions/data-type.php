<div class="titulo">
        Declarando Tipos
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);
            function sumTypes(int $a, int $b )
            {
              return($a + $b);
            }
            
          function sumTypesFloat(int $a, int $b ):int
            {
              return($a + $b);
            }
            
            
            echo "Resultado =" . sumTypes(1,2) .  "<br> \n";
            echo "Resultado =" . sumTypes(1.7,4.9) .  "<br> \n";
            echo "Resultado =" . sumTypesFloat(1.7,5.5) .  "<br> \n";
          
        ?> 