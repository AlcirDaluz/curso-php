<div class="title">Constantes</div>

<?php
//define('TAXA_DE_JUROS', 5.9); // Uma das possíveis sintaxes
const TAXA_DE_JUROS = 5.9; // Constantes não utilizam o cifrão
echo TAXA_DE_JUROS;
//echo '<br>' . $TAXA_DE_JUROS . '!';
//TAXA_DE_JUROS = 2.5;

const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

$valorVariavel = 2.8;
//define('NOVISSIMA_TAXA', $valorVariavel); // Utilizar quando deseja atribuir à uma constante o valor de uma variável existente
//const NOVISSIMA_TAXA = $valorVariavel;
const NOVISSIMA_TAXA = 2.8 + 1.2;
echo '<br>' . NOVISSIMA_TAXA;

echo '<br>' . PHP_VERSION;
echo '<br>' . PHP_INT_MAX;

echo '<br> Linha: ' . __LINE__;
echo '<br>' . __FILE__;
echo '<br>' . __DIR__;