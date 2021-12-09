<div class="titulo">
        Construtor e Destrutor
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);
            
        class Person
        {
            public $name;
            public $age;
            function __construct($newName, $newAge = 18)
            {
                echo "Construct has been invoked <br>";
                $this->name = $newName;
                $this->age = $newAge;
            }

            function __destruct()
            {
                echo "Person has been unseted <br>";
            }

            public function present()
            {
                $stringText = $this->name . ", " . $this->age . " Yrs";
                return $stringText;
            }

        }

        $person = new Person("Felipe", 32);
        $display->displayAndBroke($person->present());
        unset($person);
        $person = new Person("Felipe");
        $display->displayAndBroke($person->present());
        unset($person);
