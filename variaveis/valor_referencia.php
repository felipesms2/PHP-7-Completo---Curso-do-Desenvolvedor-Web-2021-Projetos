<div class="titulo">Valor x ReferĂȘncia</div>

    <?php
        $variavel = "Valor Inicial";
        echo $variavel;
        $variavelValor = $variavel;
        echo "<br>" .  $variavelValor;
        $variavelValor = "Novo valor";
        echo "<br> $variavelValor";
        $variavelReferencia = &$variavel;
        $variavelReferencia = "mesma referĂȘncia";
        echo "<br> $variavel, $variavelReferencia";
    ?>