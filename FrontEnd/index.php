<?php

include __DIR__ . '../../BackEnd/main.php'

  ?>

<!DOCTYPE html>
<html lang="it">

<head>
  <?php include __DIR__ . '/ComponentHtml/head.php' ?>
</head>

<body>
  <!-- <div id="app">{{ message }}</div> -->
  <div class="container mt-5">
    <div class="row">
      <?php foreach ($movies as $movie): ?>

        <div class="col">
          <div class="card p-3">
            <div class="card-text text-center">
              <?php echo $movie->get_film(); ?>

            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</body>

</html>