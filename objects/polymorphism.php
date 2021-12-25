<div class="titulo">
        Operadores Ternários
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);

            abstract class Food
            {
                public $weight;
            }

            class Rice extends Food
            {
                
            }

            class Person
            {
                public $weight;
                function __construct($weight)
                    {
                        $this->weight = $weight;
                    }
                public function Eat(Food  $comida)
                {
                    
                }
            }
            
            
            

            
        ?> 