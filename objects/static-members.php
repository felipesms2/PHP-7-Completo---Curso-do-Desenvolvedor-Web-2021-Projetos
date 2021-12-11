<div class="titulo">
        Membros Estáticos
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);

            class A
                {
                    public $nonStatic = "Atrib non static";
                    public static $staticAtrib = "Atrib static";
                }

            $classA = new A;

            $display->displayAndBroke(A::$staticAtrib);
            $display->displayAndBroke($classA::$staticAtrib);
            
        ?> 