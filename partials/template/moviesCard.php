<div class="d-flex justify-content-center align-items-center gap-4 p-4 flex-wrap">
  <?php
    //Gets movies array from the database
    $arrayOfMovies = Movie::fetchMoviesFromDatabase($conn);
    //If there are results, print data in the screen
    if(count($arrayOfMovies)>0){
      //Call the method to print the movie data for each movie founded in the database
      foreach($arrayOfMovies as $movie){
        $movie->printMovieCard();
      }
    }elseif(!$conn){
      echo "<h2>Siamo spiacenti, il database non è online quindi non sono stati trovati film da poter visualizzare</h2>";
    }else{
      echo "<h2>Siamo spiacenti, non sono stati trovati film da poter visualizzare</h2>";
    }
    
  ?>
</div>