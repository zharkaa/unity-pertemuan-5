<?php

$url = 'https://animechan.xyz/api/random';
$response = file_get_contents($url);
$data = json_decode($response, true);

var_dump($data);

$quote = $data['quote'];
$character = $data['character'];
$anime = $data['anime'];

echo "<p>\"$quote\"</p>";
echo "<p>- $character, $anime</p>";
