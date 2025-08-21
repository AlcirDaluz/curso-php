<div class="titulo">Desafio PI</div>

<?php
// Minha resposta
/* echo pi();
$pi = 3.14;

$funcao_pi = round(pi(), 2);

if ($pi === $funcao_pi) {
    echo "<br>Valor da variável pi: $pi";
    echo "<br>Valor da função pi: $funcao_pi";
    echo "<br>Iguais!";
} else {
    echo "<br>Valor da variável pi: $pi";
    echo "<br>Valor da função pi: $funcao_pi";
    echo "<br>Diferentes";
} */

// Resposta do curso
echo pi();
$pi = 3.14;

if ($pi === pi()) {
    echo "<br>Iguais!";
} else {
    echo "<br>Diferentes!";
}

// Operador Relacional
$piErrado = 2.8;

// Resposta
echo '<br>' . ($pi - pi());
echo '<br>' . ($pi - $piErrado);

if ($pi - $piErrado <= 0.01) {
    echo '<br>Praticamente iguais!';
} else {
    echo '<br>Diferentes!';
}
?>