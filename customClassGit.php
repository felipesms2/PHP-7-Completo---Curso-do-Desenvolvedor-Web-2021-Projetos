<?php

class gitRules
{
    public $gitFile = "";
    public $commitMain = false;
    public $documentRoot = "";
    public $folder ="";
    public $file ="";

    public function setFileName()
    {
        $finalFileCommit = "index.php";
        
        if ($this->commitMain==false) 
        {
           $finalFileCommit =
            //"." . 
            //$this->documentRoot . "/" . 
            $this->folder . 
            "/" . 
            $this->file . 
            "." . 
            "php";
        }
        return $finalFileCommit;
    }
}

?>