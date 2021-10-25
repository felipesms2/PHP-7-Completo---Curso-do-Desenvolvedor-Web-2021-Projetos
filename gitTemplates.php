<?php

    $options = array("commit", "push", "add .", "status", "reflog");
    $attrCount = 0;
    $reqAttr ="";
    $inputGroup ="";
    foreach ($options as $row)
     {
       if($attrCount==(0))
        {
          $reqAttr = "required";
        }
     //  $inputGroup .= "<input $reqAttr value='$row' name='cmd'></input> <br> $row \n";
       $attrCount++;
     }
    var_dump(opendir(__DIR__));
?>

    <form>
      <?=$inputGroup;?>
    </form>
