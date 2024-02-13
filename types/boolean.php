<div class="title">Tipo Booleano</div>

<?php
echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(False);
echo '<br>' . var_dump('false');
echo is_bool(false). '<br>';
echo is_bool('true') . '<br>';

// fazer as regras de conversões
echo '<p>Regras:</p>';
echo var_dump((bool) 0) . '<br>'; // apenas zero é convertido para false
echo var_dump((bool) 20) . '<br>';
echo var_dump((bool) -1) . '<br>';
echo var_dump((bool) 0.0) . '<br>';
echo var_dump((bool) 0.0000000001) . '<br>';
echo var_dump((bool) "") . '<br>'; // false
echo var_dump((bool) "0") . '<br>'; // false
echo var_dump((bool) " ") . '<br>'; // todo resto é true
echo var_dump((bool) "00") . '<br>';
echo var_dump((bool) "false") . '<br>';

echo var_dump(!!"false") . '<br>';