<div class="titulo">
        Closure and callable
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);

            $soma1 = function ($a, $b) 
            {
                return $a + $b;
            };
            
            function soma2($a, $b) {
                return $a + $b;
            };
            
            echo $soma1(2, 3) . ' ';
            echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';
            
            echo soma2(2, 3) . ' ';

         //   $display->dumpAndBroke(is_callable(soma2)); 
 

        ?> 