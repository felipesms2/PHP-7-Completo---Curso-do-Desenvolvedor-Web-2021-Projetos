<div class="titulo">
        Operações com array
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);

            $data1 = 
                [
                    "name"=>"José",
                    "age"=>"23",
                ];
            $data2 = 
                [
                    "bornPlace"=>"Fortaleza",
                    //"Naturalidade"=>"Fortaleza",
                ];
            $data3 = 
                [

                ];

            $completeData = $data1 + $data2;
            if(is_array($completeData))
                {
                    $display->dumpAndBroke($completeData);
                }
            
            $index = array_rand($completeData);
            $display->displayAndBroke("$index =  $completeData[$index]");

            unset($completeData);
            //var_dump($completeData);

            $odd = [1,3,5,7,9];
            $even = [2,4,6,8];
            $decimal = $odd + $even;
            $display->dumpAndBroke($decimal);
            
            $decimal = array_merge($odd, $even);

            $display->dumpAndBroke($decimal);

        ?> 