<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $posts = [
        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];


    $postsByDate = [];
    foreach ($posts as $date => $postList) {
        $formattedDate = str_replace('/', '-', $date);
        $postsByDate[$formattedDate] = $postList;
    }

    foreach ($postsByDate as $date => $postList) {
        echo "Data: " . $date . "<br>";
        foreach ($postList as $post) {
            echo "Titolo: " . $post['title'] . "<br>";
            echo "Autore: " . $post['author'] . "<br>";
            echo "Testo: " . $post['text'] . "<br><br>";
        }
    }
    ?>



</body>

</html>