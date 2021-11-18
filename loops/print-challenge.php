<div class="titulo">
        Desafio Impressão
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);

            $listChars = [
                "AAA",
                "BBB",
                "CCC",
                "DDD",
                "EEE",
                "FFF"
            ];
            
            for($i = 0; $i < count($listChars); $i++) 
            {
                if($i % 2 === 1) continue;
                 $display->displayAndBroke($listChars[$i]);
            }
            
            echo "<br>";
            
            foreach($listChars as $index => $value) 
            {
                if($index % 2 !== 0) 
                continue;
                $display->displayAndBroke($value);
            }
        ?> 