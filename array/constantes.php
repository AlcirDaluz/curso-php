<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = array('Laranja', 'Abacaxi');
/* FRUTAS = 'teste'; comportamento padrão em outras linguagens*/
/* FRUTAS[0] = 'banana'; em php não é possível alterar os valores do array constante, como é permitido no javascript*/
/* FRUTAS[] = 'banana'; */
echo FRUTAS[0];
// Referência da variável e o conteúdo interno do array são constantes
const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
/* CARROS["BWM"] = "325i"; */
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
/* CIDADES[0] = 'Rio de Janeiro'; */
echo '<br>' . CIDADES[1];
?>