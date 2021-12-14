<div class="titulo">
        Classe Abstrata
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);
            
        abstract class AbsClass
            {
                abstract public function method1();
                abstract public function method2($args);
            }
        abstract class AbsChild extends AbsClass
            {
                public function method1()
                {
                    return "Executing first method";
                }

                abstract public function thirdMethod();
            }
        class Concrect extends AbsChild
            {
                public function method1()
                    {
                        return "Executing first method for the second time";
                        parent::method1();
                    }
                public function method2($args)
                    {
                        return "Method2 with args " . $args;
                    }

                public function thirdMethod()
                    {
                        return "thirdMethod";
                    }
            }

        $c = new Concrect;
        $display->displayAndBroke($c->method1());
        $display->displayAndBroke($c->method2("abdc"));
        $display->displayAndBroke($c->thirdMethod());
        
        var_dump($c instanceof Concrect);
        var_dump($c instanceof AbsChild);
        var_dump($c instanceof AbsClass);
        