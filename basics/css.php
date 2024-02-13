<div class="title">Integração CSS</div>

<h1 center>
    <?php
    echo 'Hello';
    echo '<small>';
    echo ' World!';
    echo '</small>';
    ?>
</h1>

<?= "<div center blue>Outra forma de me 'expressar'!</div>" ?>

<br>
<div center>
    <button double><?= "Legal" ?></button>
</div>

<style>
    button {
        padding: 5px <?= 2 * 10 ?> px;
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    <?= "[blue]" ?>
    {
        color: #4286f4
    ;
    }

    [double] {
        font-size: <?= 10 - 8 ?>rem;
    }
</style>