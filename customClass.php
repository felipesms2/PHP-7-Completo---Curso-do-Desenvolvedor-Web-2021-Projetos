<?php

    class excercise
        {
            public $htmlTag = "<br>";
            public $value = "";
            public function displayAndBroke($param)
                {
                    echo $param . $this->htmlTag;
                }
            public function dumpAndBroke($param)
                {
                    echo var_dump($param) . $this->htmlTag;
                }
        }

?>