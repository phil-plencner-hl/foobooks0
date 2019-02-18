<?php
require 'helpers.php';
require 'logic.php';
?>

<!DOCTYPE html>
<html lang='en'>
<head>

    <title>Foobooks0</title>
    <meta charset='utf-8'>

    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">

    <link href='/styles/app.css' rel='stylesheet'>

</head>
<body>

<h1>Foobooks0</h1>

<ul class='books'>
    <?php foreach ($books as $title => $book): ?>
        <li class='book'>
            <div class='title'><?= $title ?></div>
            <div class='author'> by <?= $book['author'] ?></div>
            <img src='<?= $book['cover_url'] ?>' alt='Cover photo for the book <?= $title ?>'>
        </li>
    <?php endforeach ?>
</ul>

</body>
</html>