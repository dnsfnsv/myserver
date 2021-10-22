<h1><?= $title ?></h1>

<?php
foreach ($clients as $item): ?>
    <p><b>Имя: </b><?= $item['name'] ?></p>
    <p><b>Номер телефона: </b><?= $item['telephone'] ?></p>
    <p><b>Количество договоров: </b><?= $item['contracts'] ?></p>
    <hr>
<?php
endforeach; ?>