<div class="titulo">
        Array multidimensional
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);
            $people = [
                ["Name" => "Maria",
                "City" => "Salvador",
                 "Age" => 40
                ],

                ["Name" => "José",
                "City" => "Fortaleza",
                 "Age" => 30
                ]
        ] ;

        $display->dumpAndBroke($people);

        ?> 