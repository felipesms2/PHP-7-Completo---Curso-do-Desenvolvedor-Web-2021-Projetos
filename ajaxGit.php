<?php
include ("./commonCss.php");
$cmd = "git status";
if (isset($_GET['cmd'])) 
    {
        $cmd = $_GET['cmd'];
    }

function gitExec($cmd)
	   {
	     echo shell_exec($cmd);
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

