<div class="titulo">
        Desafio Meses
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            $months = array(1 => "Janeiro",
                "Fevereiro",
                "Março",
                "Abril",
                "Maio",
                "Junho",
                "Julho",
                "Agosto",
                "Setembro",
                "Outubro",
                "Novembro",
                "Dezembro"
                );

            //$display->displayAndBroke($status);
            $display->dupmAndPre($months);
        ?> 