<?php
// dog_api.php

// Fetch all Rottweiler images
$url = 'https://dog.ceo/api/breed/rottweiler/images';
$response = file_get_contents($url);
$data = json_decode($response, true);

// Get the list of Rottweiler images
$rottweilerImages = $data['message'];

// Display all Rottweiler images
foreach ($rottweilerImages as $image) {
    echo "<img src=\"$image\" alt=\"Rottweiler\">";
}