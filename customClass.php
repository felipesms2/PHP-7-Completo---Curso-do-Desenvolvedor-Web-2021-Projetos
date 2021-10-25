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
    class gitRules
        {
            public $gitFile = "";
            public $commitMain = false;
            public $folder;
            public $file;

            public function setFileName($subdir="")
            {
                $root = ".";
                if ($this->commitMain==false) 
                {
                    $root = "./" . $this->folder . "/" . $this->file . "" . "php";
                }
                return $root . $this->gitFile;
            }
        }


?>