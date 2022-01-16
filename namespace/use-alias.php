<?php namespace Other\Name; ?>

    <div class="titulo">
        Use Alias
    </div>

<?php

    const OTHER = "other";
    include("customClass.php");
    $display = new \excercise();
    $display->displayAndBroke(OTHER);
    echo __NAMESPACE__ . "<br>";
    include("./namespace/alias.php");

    use \Name\Very\Big as NVB;

    echo NVB\OTHER;
    


    ?>

            

