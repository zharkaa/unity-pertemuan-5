<?php

$url = 'https://zenquotes.io/api/random';
$response = file_get_contents($url);
$data = json_decode($response, true);

$quote = $data[0]['q'];
$author = $data[0]['a'];

echo "<p>\"$quote\"</p>";
echo "<p>- $author</p>";