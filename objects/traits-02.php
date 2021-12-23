<div class="titulo">
        Traits 02
    </div>
        <?php

use betterValidation as GlobalBetterValidation;

include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);

        trait strValidation 
            {
                public function validateString($str)
                {
                    return isset($str) && $str !=="";
                }
            }
        trait betterValidation 
            {
                public function validateString($str)
                {
                    return isset($str) && trim($str);
                }
            }
        class UserRoles
        {
            use strValidation, betterValidation
                {
                    betterValidation::validateString insteadOf strValidation;
                    strValidation::validateString as simple;
                }
        }
        
        $user = new UserRoles();
        $display->dumpAndBroke(($user->validateString(" ")));
        $display->dumpAndBroke(($user->simple(" ")));