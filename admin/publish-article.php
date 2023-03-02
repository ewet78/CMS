<?php

require '../includes/init.php';

Auth::requireLogin();

$conn = require '../includes/db.php';

$article = Article::getByID($conn, $_POST['id']);

$format = 'Y-m-!d H:i:s';
$date = DateTimeImmutable::createFromFormat($format, $published_at);

$date->format('Y-m-d H:i:s');

$date = $article->publish($conn);

?><time><?= $date ?></time>
