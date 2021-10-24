<a href="workers/clerks">Clerks</a>
<br>
<a href="workers/postmen">Postmen</a>
<?php

foreach ($workers as $item): ?>
    <p><b>Номер: </b><?= $item['id']; ?><p>
    <p><b>Имя: </b><?= $item['name'] ?></p>
    <p><b>Телефон: </b><?= $item['telephone'] ?></p>
    <p><b>Должность: </b><?= $item['type'] = ($item['type'] == 1) ? 'Офисный работник' : 'Почтальон'; ?></p>
    <hr>
<?php
endforeach; ?>