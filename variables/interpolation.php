<div class="title">Interpolação</div>

<?php
$numero = 10;
echo $numero;
echo '<br> $numero'; // String de aspas simples não interpreta o valor da variável
echo "<br> $numero"; // string de aspas duplas interpreta o valor da variável

$texto = "A sua nota é: $numero";
echo "<br>$texto";

$objeto = 'caneta';
echo "<br>Eu tenho 5 $objeto";
echo "<br>Eu tenho 5 {$objeto}s";
echo "<br>Eu tinha 5 { $objeto}s mas perdi 3 {$objeto }s"; // Utilizar espaços sempre fora das chaves