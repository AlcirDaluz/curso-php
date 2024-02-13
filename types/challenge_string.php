<div class="title">Desafio String</div>

<?php

// Enunciado:
// Avaliando os métodos da documentação da string, qual o método em que a posição do texto 'abc' na string '!AbcaBcabc' retorna 1?

echo strpos('!AbcaBcabc', 'abc') . '<br>';
echo stripos('!AbcaBcabc', 'abc') . '<br>';

echo strpos(strtolower('!AbcaBcabc'), strtolower('ABC'));