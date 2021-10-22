<h1><?= $title ?></h1>
<?php
foreach ($postmen as $item): ?>
    <h4><?= $item['name'], ' - ', $item['telephone']; ?></h4>
    <hr>
<?php
endforeach; ?>
