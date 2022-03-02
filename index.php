<?php

include __DIR__ . '/models/index.php';
include __DIR__ . '/data/movies.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <?php foreach ($movies as $movie) :
            $movies_obj = new Movie(
                $movie['title'],
                $movie['genre'],
                $movie['language'],
                $movie['rank'],
                $movie['recomend']
            )
        ?>
            <h2><?= $movies_obj->title ?></h2>
            <h4><?= $movies_obj->genre ?></h4>
            <span><?= $movies_obj->language ?></span>
            <h6><?= $movies_obj->rank ?></h6>
            <span><?= $movies_obj->get_recomend() ?></span>
        <?php endforeach; ?>
        <div>

        </div>
    </section>
</body>

</html>