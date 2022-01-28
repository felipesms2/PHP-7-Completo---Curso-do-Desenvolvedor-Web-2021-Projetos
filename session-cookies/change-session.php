<?php
session_start();
print_r($_SESSION);
?>

<br>
<br>



<strong>Name:</strong> <?=$_SESSION['name']?>
<?php
$_SESSION['name'] = "Souza";
?>

<br>

<strong>Name:</strong> <?=$_SESSION['name']?>

<br>

<a href="">
    Encerrar Sessão
</a>