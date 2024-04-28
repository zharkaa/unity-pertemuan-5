<?php

$url = 'https://api.quotable.io/random';
$response = file_get_contents($url);
$data = json_decode($response, true);

$quote = $data['content'];
$author = $data['author'];

echo "<p>\"$quote\"</p>";
echo "<p>- $author</p>";
