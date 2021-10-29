    <div class="titulo">
        Comparacao entre arrays
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);
            
            $arrayName = array('name' => 'felipe', 'age'=>12 );
            $arrayName2 = array('name' => 'felipe', 'age'=>12 );
            
          echo "Non Strict " . $display->dumpAndBroke($arrayName == $arrayName2);
          echo 'Strict ' . $display->dumpAndBroke($arrayName == $arrayName2);
          
          $arrayName3 = array('age'=>12, 'name' => 'felipe');
          
          $display->dumpAndBroke($arrayName3===$arrayName2);
        ?> 