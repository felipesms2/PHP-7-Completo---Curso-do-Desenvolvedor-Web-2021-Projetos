<div class="titulo">
        Custom Error
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);

     

     
            // echo 7 / 0;
            class AgeRetireException extends Exception {
                public function __construct($message, $code = 0,
                    $previous = null) {
                    parent::__construct($message, $code, $previous);
                }
            }
            
            function retireTimeCalculate($age) {
                if($age < 18) 
                {
                    throw new AgeRetireException('Too young');
                }
            
                if($age > 70) 
                {
                    throw new AgeRetireException(
                        'Must have retired');
                }
                
                return 70 - $age;
            }
            
            $agesToEvaluate = [15, 30, 60, 80, "asdf"];
            
            foreach($agesToEvaluate as $age) 
            {
                try {
                        $remainingTime = retireTimeCalculate($age);
                        echo "Age: $age, $remainingTime years left<br>";
                    } 
                catch(AgeRetireException $e) 
                {
                    echo "Impossible to calculate $age years.<br>";
                    echo "Reason: {$e->getMessage()}<br>";
                }
            }
            
            