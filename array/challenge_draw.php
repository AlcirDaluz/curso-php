<div class="title">Desafio Sorteio</div>

<?php
$nomes = ["Elza", "Rapunzel", "Branca de neve", "Cinderela"];

$indiceAleatorio = array_rand($nomes);
echo "<div center><h1>$nomes[$indiceAleatorio]</h1></div>";
?>

<style>
    [center] {
        display: flex;
        justify-content: center;
    }
</style>
