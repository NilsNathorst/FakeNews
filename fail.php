<?php
$search = 'war';
$apiKey = 'apiKey=4912411c6cb2430ebde2f47727915e33';
$today = new DateTime();
$dd = $today->getDate();
$mm = $today->getMonth() + 1;
$yyyy = $today->getFullYear();

if ($dd < 10) {
  $dd = '0' + $dd;

}if ($mm < 10) {
  $mm = '0' + $mm;

}
$today = $yyyy + '-' + $mm + '-' + $dd;

function setup() {
  global $apiKey;
  global $today;
  global $search;$url = 'https://newsapi.org/v2/everything?q=' + $search + '&from=' + $today + '&sortBy=publishedAt&' + $apiKey;
  $parsedUrl = loadJSON($url, $getData);



  function getData($data) {
    for ($i = 0;
    $i < 5;$i++) {
      echo $data->articles[$i]->author;
      echo $data->articles[$i]->title;
      echo $data->articles[$i]->description;
      echo $data->articles[$i]->source->name;
      echo $data->articles[$i]->publishedAt;
      echo $data->articles[$i]->url;
    }}
  }
?>
