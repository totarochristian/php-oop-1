<?php
  include __DIR__."/partials/server/settings.php";
  include __DIR__."/modules/Movie.php";
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Movies</title>
</head>
<body>
  <header>
    <?php include __DIR__."/partials/template/navbar.php"; ?>
  </header>
  <main class="container">
    <?php echo var_dump(Movie::fetchMoviesFromDatabase($conn)); ?>
  </main>
  <footer>
    
  </footer>
</body>
</html>