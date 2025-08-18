<div class="titulo">Operadores Relacionais</div>

<?php
echo var_dump(1 == 1) . '<br>';
echo var_dump(1 > 1) . '<br>';
echo var_dump(1 >= 1) . '<br>';
echo var_dump(4 < 23) . '<br>';
echo var_dump(1 <= 7) . '<br>';
echo var_dump(1 != 1) . '<br>';
echo var_dump(1 <> 1) . '<br>';
echo '<br>';

echo var_dump(111 == '111') . '<br>';
echo var_dump(111 === '111') . '<br>';
echo var_dump(111 != '111') . '<br>';
echo var_dump(111 !== '111') . '<br>';

echo '<p>Relacionais no If/Else</p><hr>';

$idade = 15;
if ($idade < 18) {
    echo "Menor de idade = $idade anos<br>";
} else if ($idade <= 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Idoso = $idade anos<br>";
}

echo '<p>Spaceship</p><hr>';
echo var_dump(500 <=> 3) . '<br>'; // Quando o operando da esquerda for maior que o operando da direita, o retorno será true (1), independente 
//da diferença entre ambos.
echo var_dump(50 <=> 50) . '<br>'; // Números iguais retorna 0.
var_dump(5 <=> 50); // Número da direita maior que o número da esquerda retorna false (-1).

echo '<p>Valores podem ser V ou F</p><hr>';
echo var_dump(!!5) . '<br>';
echo var_dump(!!0) . '<br>';
echo var_dump(!!"") . '<br>';
echo var_dump(!!" ") . '<br>';
?>

<style>
    p {
        margin-bottom: 0px;
    }

    hr {
        margin-top: 0px;
    }
</style>