<div class="d-flex justify-content-center align-items-center gap-4 p-4 flex-wrap">
  <?php
    //Gets movies array from the database
    $arrayOfMovies = Movie::fetchMoviesFromDatabase($conn);
    //Call the method to print the movie data for each movie founded in the database
    foreach($arrayOfMovies as $movie){
      $movie->printMovieCard();
    }
  ?>
</div>