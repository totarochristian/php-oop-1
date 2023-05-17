<div class="d-flex justify-content-center align-items-center gap-4 p-4 flex-wrap">
  <?php
    //Gets movies array from the database
    $arrayOfMovies = Movie::fetchMoviesFromDatabase($conn);
    //Print the title before the print of cards movies (or an error)
    if(!$conn){
      echo "<h2>Siamo spiacenti, il database non è online quindi non sono stati trovati film aggiornati da poter visualizzare.<br>Di seguito potrai visualizzare alcuni film di default.</h2>";
    }elseif(count($arrayOfMovies)==0){
      echo "<h2>Siamo spiacenti, non sono stati trovati film da poter visualizzare</h2>";
    }
    
    //Call the method to print the movie data for each movie founded in the database
    foreach($arrayOfMovies as $movie){
      $movie->printMovieCard();
    }
  ?>
</div>