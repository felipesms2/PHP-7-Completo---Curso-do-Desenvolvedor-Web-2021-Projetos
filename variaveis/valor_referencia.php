<div class="titulo">Valor x Referência</div>

    <?php
        $variavel = "Valor Inicial";
        echo $variavel;
        $variavelValor = $variavel;
        echo "<br>" .  $variavelValor;
        $variavelValor = "Novo valor";
        echo "<br> $variavelValor";
        $variavelReferencia = &$variavel;
        $variavelReferencia = "mesma referência";
        echo "<br> $variavel, $variavelReferencia";
    ?>