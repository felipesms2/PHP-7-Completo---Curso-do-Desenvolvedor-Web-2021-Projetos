<div class="titulo">Array Básico</div>

<?php

      include("customClass.php");
      $display = new excercise();
      //$display->displayAndBroke($status);
      //$display->dumpAndBroke($status);
      echo "<p>";
      $list = array(1,3,5,'Random text');
      
      $display->displayAndBroke($list[0]);
      $display->displayAndBroke($list[1]);
      $display->displayAndBroke($list[2]);
      $display->displayAndBroke($list[3]);
      $display->dumpAndBroke($list[3]);

      $texto = "Aqui está um texto de teste com acentuação";
      $textoUTF8 = utf8_decode($texto);

      $display->displayAndBroke(utf8_encode($textoUTF8));
      $display->dumpAndBroke($texto);

      $display->displayAndBroke($texto[10]);

      echo "</p>";

?>