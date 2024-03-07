<div class="title">Mapa</div>

<?php
$dados = array("idade" => 25, "cor" => "verde", "peso" => 49.8); // nesse caso a string idade foi utilizada como chave do valor 25

print_r($dados);

//var_dump($dados[0]);
echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];

$lista = array("a", "cinco" => "b", "c", 8 => "d", "e", 6 => "f", "g", 8 => "h");

echo '<br>';
print_r($lista);

$lista[] = 'i';
echo '<br>';
print_r($lista);

$lista['vinte'] = 'j';
echo '<br>';
print_r($lista);

//$lista[false] = 'tentei indexar com false!'; // nesse caso o false será convertido para 0 e vai substituir o valor do índice 0
//echo '<br>';
//print_r($lista);

//$lista[true] = 'tentei indexar com false!'; // nesse caso o false será convertido para 1 e vai substituir o valor do índice 1
//echo '<br>';
//print_r($lista);