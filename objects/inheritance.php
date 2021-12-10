<div class="titulo">
        Herança
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
                function __construct($name, $age)
                {
                    $this->name = $name;
                    $this->age = $age;
                    echo "Person has been created <br>";
                }

                function __destruct()
                {
                    echo "Tchau <br>";
                }

                public function present()
                {
                    echo $this->name . ", " . $this->age . " anos <br>";
                }
            }
        class User extends Person
            {
                public $login;
                function __construct($name, $age, $login)
                {
                    $this->name = $name;
                    $this->age = $age;
                    $this->login = $login;
                    echo "<br> User has been created <br>";
                }
                function __destruct()
                {
                    echo "<br> User says goodBye <br>";
                    parent::__destruct();
                }
                public function present(Type $var = null)
                {
                    parent::present();
                    echo  " " . $this->login;
                }
            }
        

        

            $person1 = new Person("Felipe", 32);
            $person1->present();
            unset($person1);

            $user1 = new User("Felipe", 32, "felipesms");
            $user1->present();
            unset($user1);
        
            
        ?> 