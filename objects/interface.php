<div class="titulo">
        Interface
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);

            interface Animal
                {
                    function breath();
                }
            class Dog implements Animal
            {
                 function breath()
                {
                    return "Using oxigen";
                }
            }
            
        $dog1 = new Dog;
        $display->displayAndBroke($dog1->breath());
            
        ?> 