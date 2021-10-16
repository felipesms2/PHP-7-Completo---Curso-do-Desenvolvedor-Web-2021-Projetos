    <div class="titulo">
        Operadores Ternários
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();

            $idade =70;
            $status;
            if($idade >18)
                {
                    $status = "Maior de idade";
                }
            else
                {
                    $status = "Menor de idade";
                }
            $display->displayAndBroke($status);
        
            $idade = 17;
            $status = $idade>=18 ? "Maior de idade" : "Menor de idade";
            $display->displayAndBroke($status);
        ?> 