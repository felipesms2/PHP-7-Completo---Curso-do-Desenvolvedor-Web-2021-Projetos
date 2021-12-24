<div class="titulo">
        Métodos mágicos
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);
            
        class People 
        {
            public $name;
            public $age;
            public $strDisplay = [];

            public function __construct($name, $age)
                {
                    $this->name = $name;
                    $this->age = $age;
                    $this->strDisplay[] = "Construct has been invoked";
                }
            public function __destruct()
            {
                echo "And died";
            }
            public function __toString()
            {
                return $this->name . " have " . $this->age . " years" ;
            }
            public function presentPeople()
            {
                return $this;
            }
            public function __get($attrRandom)
            {
                return "Reading non existent attr " . $attrRandom;
            }
        }
        

        $people = new People("Felipe", 32);
        $display->dumpAndBroke($people->strDisplay);
        $display->displayAndBroke($people);
        $display->displayAndBroke($people->presentPeople());
        $people->name = "Someone more";
        $display->displayAndBroke($people->presentPeople());
        $display->dumpAndBroke($people->asdf);
        $display->dumpAndBroke($people->assf);