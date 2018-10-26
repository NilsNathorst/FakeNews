<?php
require __DIR__.'/test.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="main.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">


  <title>Fake Nudes</title>
</head>
<script type="text/javascript">
  var currentLikes = 0;
</script>
<body>
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper ">
        <form method='get'>
          <div class="input-field">
            <form action="index.php">
              <input id="search" type="search" name="query" required >
            </form>
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>

          </div>
        </form>
      </div>
    </nav>
  </div>

  <?php
  for ($i = 0;
  $i < 3;$i++):
  ?>

  <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img src="<?= $data['articles'][$i]['urlToImage'];?>">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><?= $data['articles'][$i]['title']; ?><i class="material-icons right">more_vert</i></span>
      <p><?= $data['articles'][$i]['author']; ?> <?= substr($data['articles'][$i]['publishedAt'], 0, 10); ?></p>
      <br>
      <a  data-id="<?= 'likecounter'.$i?>"class ="button waves-effect waves-light red btn-floating likebutton"><i class="material-icons">favorite_border</i></a>
      <span id="<?=  'likecounter'.$i?>">0

      </span>
    </div>
    <div class="card-reveal">
      <span class="  card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
      <p ><?= $data['articles'][$i]['content']; ?></p>
      <p><a href="<?= $data['articles'][$i]['url']; ?>"><i class="material-icons right">add_circle</i></a></p>
    </div>
  </div>
</div>
<?php

endfor;

?>

<script type="text/javascript" src="index.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="libraries/p5.js"></script>
<script type="text/javascript" src="libraries/p5.dom.js"></script>
<!-- <script type="text/javascript" src="index.js"></script> -->
</body>
</html>
