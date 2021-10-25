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
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="cel-fah">Celsius > Fahrenheit</option>
        <option value="fah-cel">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
    define("FATOR_KM_MILHA", 0.621371);
    define("FATOR_METRO_KM", 1000);
    define("FATOR_CEL_FAH", 1.8);

    $valConvert = $_POST['valConvert'] ?? 0;
    if(isset($_POST["conversao"]))
        {
            switch ($_POST['conversao']) 
            {
            case 'km-milha':
                $distancia = $valConvert * FATOR_KM_MILHA;
                $mensagem = "$valConvert Km(s) = $distancia Milha(s)";
                break;
            case 'milha-km':
                $distancia = $valConvert / FATOR_KM_MILHA;
                $mensagem = "$valConvert Milha(s) = $distancia Km(s)";
                break;
            case 'metro-km':
                $distancia = $valConvert / FATOR_METRO_KM;
                $mensagem = "$valConvert Metro(s) = $distancia Km(s)";
                break;
            case 'km-metro':
                $distancia = $valConvert * FATOR_METRO_KM;
                $mensagem = "$valConvert Km(s) = $distancia Metro(s)";
                break;
            default:
                $mensagem = "Nenhum valor calculado!";
        }
        }
  
if (isset($mensagem)) 
 {
    echo "<p>$mensagem</p>";
 }
