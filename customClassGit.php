<?php

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