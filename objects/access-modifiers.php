<div class="titulo">
        Modificadores de Acesso e Visibilidade
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);
            
        class A 
        {
            public $public = "Public";
            public $protected =  "protected";
            public $private = "Private";
            public $display;
            public function showA($display)
              {
               $display->displayAndBroke($this->public);
               $display->displayAndBroke($this->protected);
               $display->displayAndBroke($this->private);
              }
           private function doNotShow($display)
             {
              $display->displayAndBroke("I won't show");
             }
           
           protected function streamByInheritance()
           {
            echo "<br>Will be showed by inheritance<br>";
           }
        }
        $classA = new A();
        $classA->showA($display);
       // $classA->doNotShow($display);
        
        class B extends A
         {
          public function showB()
          {
           parent::streamByInheritance();
          }
         }
         
         $classB = new B();
         $classB->showB();