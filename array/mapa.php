<div class="titulo">Mapa</div>

        <?php
            include("customClass.php");
            $display = new excercise();
            
            $list = array(1,3,5,'Random text');
            $dataArr =array("color"=>"blue",
            "age"=>"40",
            "height"=>"160",
            "wheight"=>"70.10"
        );

            $display->dumpAndBroke($dataArr);
            
            $display->displayAndBroke($dataArr["age"]);
            $display->displayAndBroke($dataArr["height"]);
            $display->displayAndBroke($dataArr["wheight"]);
            $display->displayAndBroke($dataArr["color"]);

            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);
        ?> 