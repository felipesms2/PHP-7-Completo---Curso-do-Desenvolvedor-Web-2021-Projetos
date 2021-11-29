<div class="titulo">
        Map e Filter
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);

            function filterNumber($data)
            {
                return $data>=4;
            }

            $score = [5.8, 7.3, 9.8, 6.7];
            $bunchNumbers = [1,2,3,4,5,6,7,8];
            $moreThanFour = array_filter($bunchNumbers, function($data){return $data>=4;});
            $moreThanFourVersion2 = array_filter($bunchNumbers, 'filterNumber');

            $finalScore = array_map('round', $score);
            $display->dumpAndBroke($finalScore);
            $display->dumpAndBroke($moreThanFour);
            $display->dumpAndBroke($moreThanFourVersion2);

        ?> 