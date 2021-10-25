<div class="titulo">Mapa</div>

        <?php
            include("customClass.php");
            $display = new excercise();
            
            $list = array(1,3,5,'Random text');
            $dados =array("Cor"=>"Azul",
            "Idade"=>"40",
            "Altura"=>"160",
            "Peso"=>"70.10"
        );

            $display->dumpAndBroke($dados);

            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);
        ?> 