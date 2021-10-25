<div class="titulo">
        Desafio Switch
    </div>
        <?php

            include("customClass.php");            
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);
        ?> 

<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="valConvert">
    <select name="conversion" id="conversion">
        <option value="kmMile">Km > Milha</option>
        <option value="mileKm">Milha > Km</option>
         <option value="meterKm">Metros > Km</option>
        <option value="kmMeter">Km > Metros</option>
        <option value="cel-fah">Celsius > Fahrenheit</option>
        <option value="fah-cel">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>


<?php
    define("KM_MILE", 0.621371);
    define("METER_KM", 1000);
    define("CEL_FA", 1.8);

    $valConvert = $_POST['valConvert'] ?? 0;
    if(isset($_POST["conversion"]))
        {
            switch ($_POST['conversion']) 
            {
            case 'kmMile':
                $distance = $valConvert * KM_MILE;
                $message = "$valConvert Km(s) = $distance Milha(s)";
                break;
            case 'mileKm':
                $distance = $valConvert / KM_MILE;
                $message = "$valConvert Milha(s) = $distance Km(s)";
                break;
            case 'meterKm':
                $distance = $valConvert / METER_KM;
                $message = "$valConvert Metro(s) = $distance Km(s)";
                break;
            case 'kmMeter':
                $distance = $valConvert * METER_KM;
                $message = "$valConvert Km(s) = $distance Metro(s)";
                break;
            default:
                $message = "Nenhum valor calculado!";
        }
        }
  
if (isset($message)) 
 {
    echo "<p>$message</p>";
 }
