<?php
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);
      
      
      
        echo "Eu sou uma string";
        echo "<br>";
        var_dump("eu_tambem");
        
        //Concatenation
        
        echo "<br>
        We also" .  ' are strings <br>';
        echo "We also", " accept", " commas <br>";
        print "We also exist as echo alternative <br>";
        
        print strtoupper("We turn all the letters uppercase");
        echo "<br>";
        print strtolower("WE TURN ALL THE LETTERS LOWERCASE");
        echo "<br>";
        echo ucfirst("only first word from sentence is going to upper");
        echo "<br>";
        echo ucwords("all words here have to be started with upper case");
        echo "<br>";
        print strlen("How many chars have in this sentence");
        print "<br>";
        $specialChars = "Caracteres especiais e acentuação";
        echo "The var specialChars have " . strlen($specialChars) . " if we ignore UTF-8 and have" . mb_strlen($specialChars, "utf-8") . " if we don't ignore UTF-8";
        $charToPiece = "Only a piece of text";
        print "<br>";
        echo "Showing only part of charToPiece: (2, 8)" . substr($charToPiece, 2, 8);
        print "<br>";
        echo "Showing only part of charToPiece: (3, end)" . substr($charToPiece, 3);
        $toReplace = "this this this";
        echo  "Replacing this for THAT " . str_replace("this","that" $toReplace);
        echo "";
        
        
        
        //Some functions about stings
  
?>




