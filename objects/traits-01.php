<div class="titulo">
        Traits 01
    </div>
        <?php

use User as GlobalUser;

include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);
            
        trait validation        
            {
                public function stringValidation($str)
                {
                    return isset($str) && $str !== "";
                }
            }
        trait betterValidation        
            {
                public function betterStrValidation($str)
                {
                    return isset($str) && trim($str);
                }
            }

        class UserTrait 
        {
            use validation, betterValidation;
        }
        
        $user = new UserTrait();

        $display->dumpAndBroke($user->stringValidation(" "));
        $display->dumpAndBroke($user->betterStrValidation(" "));