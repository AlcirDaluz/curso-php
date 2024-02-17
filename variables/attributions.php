<div class="title">Atribuições</div>

<?php
$title = 'Atribuições';
$numero = 10;
echo $numero;
$numero = $numero - 3;
echo '<br>' . $numero;
$numero = $numero + 1.5;
echo '<br>' . $numero;
$numero--;
echo '<br>' . $numero;
++$numero;
echo '<br>' . $numero;
$numero = 20;
echo '<br>' . $numero;
$numero -= 5;
echo '<br>' . $numero;
$numero += 5;
echo '<br>' . $numero;
$numero *= 10;
echo '<br>' . $numero;
$numero /= 2;
echo '<br>' . $numero;
$numero %= 6;
echo '<br>' . $numero;
$numero **= 4;
echo '<br>' . $numero;
$numero .= 4; // concatenando o número 4, ou seja, vai juntar o 256 e mostrar o 4 logo após, ficando 2564
echo '<br>' . $numero;

$texto = 'Esse é um texto';
echo '<br>' . $texto;
$texto = $texto . ' qualquer';
echo '<br>' . $texto;
$texto .= ' de verdade!';
echo '<br>' . $texto;

//$variavelInexistente = 'valor existente';
//echo '<br>' . $variavelInexistente;
$valor = $variavelInexistente ?? 'valor default'; // valor padrão será utilizado caso a variável selecionada não exista
echo '<br>' . $valor;