<div class="titulo">
        Argumentos Variáveis
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);

            function sumNumber(...$numbers)
                {
                    $result =0;
                    foreach ($numbers as $num) 
                    {
                       $result += $num;
                    }
                    return $result;
                }
            
            function getPeople(...$people)
            {
                $person = [];
                foreach ($people as $personName) 
                    {
                        $person[] = $personName;
                    }
                return $person;
            }

            $display->displayAndBroke(sumNumber(2,4,2));
            $display->dumpAndBroke(getPeople("Abrantes","Josefina","Max"));



        ?> 