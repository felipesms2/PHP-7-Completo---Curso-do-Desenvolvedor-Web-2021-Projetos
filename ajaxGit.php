<?php
include ("./commonCss.php");
$cmd = "pwd";
if (isset($_GET['cmd'])) 
    {
        $cmd = $_GET['cmd'];
    }

function gitExec($cmd)
	   {
	     echo shell_exec($cmd);
	     echo shell_exec("git push");
	   }
?>

<div class="terminal space shadow">
    <div class="top">
        <div class="btns">
            <span class="circle red"></span>
            <span class="circle yellow"></span>
            <span class="circle green"></span>
        </div>
        <div class="title">bash -- 70x32</div>
    </div>
    <pre class="body">
        <?=gitExec($cmd)?>
    </pre>
</div>

