<div class="title">Desafio Operadores Lógicos</div>

<!--
    Dois trabalhos -> terça e quinta!
    Se os dois trabalhos forem executados -> TV 50' e sorvete
    Se apenas um for executado -> TV de 32' e sorvete
    Se nenhum for executado -> Ficar em casa
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.1rem;
    }
</style>

<?php
echo $_POST['t1']; // o meio para receber o conteúdo do formulário dependário do method utilizado no mesmo
echo "<br>" . $_POST['t2'];

if ($_POST['t1'] == 1 && $_POST['t2'] == 1) {
    echo "<br>Comprar TV de 50 polegadas e tomar sorvete";
} elseif (($_POST['t1'] == 0 && $_POST['t2'] == 1) || ($_POST['t1'] == 1 && $_POST['t2'] == 0)) {
    echo "<br>Comprar TV de 32 polegadas e tomar sorvete";
} else {
    echo "<br>Ficar em casa sem comprar nada";
}