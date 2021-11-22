<div class="titulo">
        Argumento Padrão
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->xdisplayAndBroke($status);
            //$display->dumpAndBroke($status);
            function orderFood($food, $drink = "Water")
            {
              return "Requested food is $food and drink is $drink";
            }
            echo orderFood("Bife") . "<br> \n";
            echo orderFood("Bife", "wine") . "<br> \n";
            
        function helloCustomer($personName="Undefined")
          {
             return "Hello $personName <br> \n";
          }
      
            echo helloCustomer();
            echo helloCustomer("Felipe");
        
        ?> 