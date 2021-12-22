<div class="titulo">
        Modificadores Finais
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);


        abstract class SomeNameABS
            {
                abstract public function method1();
               final function method2()
                {
                    echo "I won't change! <br>";
                }

            }

        class ChildSome extends SomeNameABS
        {
             public function method1()
            {
                echo "Executing method 1 <br>";
            }


        }

        final class NoInheritance 
        {
            public $msg = "Props and methods on this class cannot be inhherited";
            public function generalAlert()
            {
                return $this->msg;
            }
        }
        
        
        $testing = new ChildSome();
        $testing->method1();
        $testing->method2();

        $noInheritance = new NoInheritance();

        $display->displayAndBroke($noInheritance->generalAlert());

        ?> 