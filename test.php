<?php
declare(strict_types=1);

//remove this ---->
ini_set("allow_url_fopen", '1');
global $apiKey;
global $today;
global $search;
//  to here   //
$search = 'top-headlines';
$apiKey = 'apiKey=4912411c6cb2430ebde2f47727915e33';

$url = 'https://newsapi.org/v2/everything?q=' . $search . '&from=' . $today . '&sortBy=publishedAt&' . $apiKey;
// $parsedUrl = loadJSON($url, $getData);

$data = json_decode(file_get_contents($url), true);
        $query = $_GET['query'] ?? 'top-headlines';
        $newUrl = 'https://newsapi.org/v2/everything?q=' . $query . '&from=' . $today . '&sortBy=publishedAt&' . $apiKey;
        $data = json_decode(file_get_contents($newUrl), true);
        $url = $newUrl;


?>
