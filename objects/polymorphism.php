<div class="titulo">
        Polimorfismo
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

            class Candy
            {
                public $weight;
            }
            

            class Rice extends Food
            {
              public $weight;   
            }

            class Person
            {
                public $weight;
                function __construct($weight)
                    {
                        $this->weight = $weight;
                    }
                public function eat(Food  $food)
                {
                    $this->weight += $food->weight;
                }
            }
            
            $f = new Rice;
            $f->weight = 1.5;
            $c = new Candy;
            $c->weight = 10;
            $p = new Person(90);
            $p->eat($f);
            //$p->eat($c); will show error

            echo $p->weight;

            
        ?> 