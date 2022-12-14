<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $books = [
        [
            'name' => 'Do androids dream of electric sheep?',
            'author' => 'Phillip Dick',
            'purchaseUrl' => 'example.com',
            'releaseDate' => '1968'
        ],
        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'purchaseUrl' => 'example.com',
            'releaseDate' => '2021'
        ],
        [
            'name' => 'The  Martian',
            'author' => 'Andy Weir',
            'purchaseUrl' => 'example.com',
            'releaseDate' => '2011'
        ]
    ];

    function filter($items, $fn)
    {
        $filteredItems = [];
        foreach ($items as $item) {
            if ($fn($item)) {
                $filteredItems[] = $item;
            }
        }

        return $filteredItems;
    }

    $filteredBooks = filter($books, function($book) {
        return $book['releaseDate'] < 2000;
    });
    ?>
    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>"><?= $book['name'] . ' : ' . 'Publised ' . $book['releaseDate']; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>