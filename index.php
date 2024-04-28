<?php
// dog_api.php

// Fetch a random dog image
$url = 'https://dog.ceo/api/breeds/image/random';

$response = file_get_contents($url);
$data = json_decode($response, true);

// Get the image URL
$imageUrl = $data['message'];

// Output the image
echo "<img src=\"$imageUrl\" alt=\"Random dog\">";
