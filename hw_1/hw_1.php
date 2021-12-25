<?php
$items = [
    [
        'id' => 1,
        'title' => 'Flute',
        'price' => 20000,
        'img' => 'flute.jpg',
        'description' => [
            'color' => 'white',
            'material' => 'bamboo'
        ]
    ],
    [
        'id' => 2,
        'title' => 'Guitar',
        'price' => 18000,
        'img' => 'guitar.jpg',
        'description' => [
            'color' => 'brown',
            'material' => 'linden'
        ]
    ],
    [
        'id' => 3,
        'title' => 'Drum',
        'price' => 68000,
        'img' => 'drum.jpg',
        'description' => [
            'color' => 'brown',
            'material' => 'steel'
        ]
    ],
];
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Items</title>
</head>
<body>
<section>
    <?php foreach ($items as $item): ?>
        <div>
            <h3><?= $item['id'].' . '.$item['title'] ?></h3>
            <p><span>Стоимость: <?= $item['price'] ?></span></p>
            <p><img src="<?= $item['img'] ?>" alt="<?= $item['img'] ?>"></p>
            <p><span>Описание:</span></p>
            <p><span>Цвет - <?= $item['description']['color'] ?></span></p>
            <p><span>Материал - <?= $item['description']['material'] ?></span></p>
        </div>
    <?php endforeach; ?>

</section>
</body>
</html>