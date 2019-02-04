<?php
declare(strict_types=1);

$today = date('Y'.'/'.'m'.'/'.'d');
$search = 'top-headlines';
$apiKey = 'apiKey=4912411c6cb2430ebde2f47727915e33';

$url = 'https://newsapi.org/v2/everything?q=' . $search . '&from=' . $today . '&sortBy=publishedAt&' . $apiKey;

$data = json_decode(file_get_contents($url), true);
$query = $_GET['query'] ?? 'top-headlines';
$newUrl = 'https://newsapi.org/v2/everything?q=' . $query . '&from=' . $today . '&sortBy=publishedAt&' . $apiKey;
$data = json_decode(file_get_contents($newUrl), true);
$url = $newUrl;
