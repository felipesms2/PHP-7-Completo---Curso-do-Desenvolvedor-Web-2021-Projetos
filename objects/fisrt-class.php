<div class="titulo">
        Primeira Classe
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);

            class Customer
                {
                    //Atributes
                    public $name = 'Anonimo';
                    public $idade = 18;
                    public function present()
                    {
                        echo $this->name;
                    }
                }

            $c1 = new Customer;
            $c1->name = "Another person";
            $c1->present();
            $display->displayAndBroke("");
            $display->displayAndBroke($c1->name);