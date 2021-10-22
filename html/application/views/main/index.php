<h1>Добро пожаловать!</h1>

<br>
<h2>Сотрудники</h2>
<?php
foreach ($workers as $item): ?>
    <p><b>Номер: </b><?= $item['id']; ?><p>
    <p><b>Имя: </b><?= $item['name'] ?></p>
    <p><b>Телефон: </b><?= $item['telephone'] ?></p>
    <p><b>Должность: </b><?= $item['type'] = ($item['type'] == 1) ? 'Офисный работник' : 'Почтальон'; ?></p>
    <hr>
<?php
endforeach; ?>

<br><br>
<h2>Клиенты</h2>
<?php
foreach ($clients as $item): ?>
    <p><b>Имя: </b><?= $item['name'] ?></p>
    <p><b>Номер телефона: </b><?= $item['telephone'] ?></p>
    <p><b>Количество договоров: </b><?= $item['contracts'] ?></p>
    <hr>
<?php
endforeach; ?>

<br><br>
<h2>Договоры</h2>
<?php
foreach ($contracts as $item): ?>
    <p><b>Номер: </b><?= $item['id']; ?><p>
    <p><b>Цена: </b><?= $item['price'] ?></p>
    <p><b>Вес: </b><?= $item['weight'] ?></p>
    <p><b>Пункт назначения: </b><?= $item['destination'] ?></p>
    <p><b>Сейчас действует: </b><?= $item['active'] = ($item['active'] == 1) ? 'Да' : 'Нет'; ?></p>
    <p><b>Дата создания: </b><?= $item['dateofcreation'] ?></p>
    <p><b>Дата доставки: </b><?= $item['dateofexecution'] ?></p>
    <p><b>Офисный служащий, заключивший договор:</b><p style="margin-left: 10px"><b>Номер - </b><?= $item['clerk_id'] ?>
    </p><p style="margin-left: 10px"><b>Имя - </b><?= $item['clerk_name'] ?></p>
    <p><b>Почтальон:</b><p style="margin-left: 10px"><b>Номер - </b><?= $item['postman_id'] ?></p><p
            style="margin-left: 10px"><b>Имя - </b><?= $item['postman_name'] ?></p>
    <p><b>Клиент:</b><p style="margin-left: 10px"><b>Номер - </b><?= $item['client_id'] ?></p><p
            style="margin-left: 10px"><b>Имя - </b><?= $item['client_name'] ?></p>
    <hr>
<?php
endforeach; ?>

