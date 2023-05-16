<?php
  include __DIR__."/partials/server/settings.php";
  include __DIR__."/modules/Movie.php";

  echo var_dump(Movie::fetchMoviesFromDatabase($conn));