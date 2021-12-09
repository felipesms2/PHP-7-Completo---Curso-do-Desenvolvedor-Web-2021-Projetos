<div class="titulo">
        Desafio Data
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);
            

        class StaticDate 
            {
                public $year = "1980";
                public $month = "01";
                public $day = "05";
                
                public function ShowDate()
                {
                    return "You got married in {$this->year}, {$this->month}, {$this->day}";
                }
            }

        $marryDate = new StaticDate;

        $display->displayAndBroke($marryDate->ShowDate());
        

        ?> 