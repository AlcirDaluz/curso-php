<div class="title">Tipo String</div>

<?php
echo 'Eu sou uma string<br>';
var_dump("Eu também");
echo '<br>';

// concatenação
echo ("Nós também" . ' somos' . '<br>'); // forma padrão para concatenar strings na linguagem PHP
echo ("Número é " . 123);
echo '<br>', "Também aceito", " vírgulas"; // echo suporta concatenação de strings usando vírgula

echo '<br>';
echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" " . "\\";

print ("<br>Também existe a função print");
print "<br>Também existe a função print";

// Algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra maiúscula');
echo '<br>' . ucwords('a primeira letra de cada palavra');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . mb_strlen('Eu também', 'utf-8');
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // parte
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso');