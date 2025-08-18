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
?>