<?php
/**
 * Class to manage movies data
 */
class Movie{
  /**
   * Id of the movie
   *
   * @var integer
   */
  private int $id;

  /**
   * Title of the movie
   *
   * @var string
   */
  private string $title;

  /**
   * Original title of the movie
   *
   * @var string
   */
  private string $originalTitle;

  /**
   *  Nationality of the movie
   *
   * @var string
   */
  private string $nationality;

  /**
   * Date of the movie
   *
   * @var array Associative array with the data content
   */
  private $date;

  /**
   * Vote of the movie
   *
   * @var float
   */
  private float $vote;

  /**
   * Image of the movie
   *
   * @var string
   */
  private string $image;

  /**
   * Constructor with optional parameters
   *
   * @param integer $id Id of the movie
   * @param string $title Title of the movie
   * @param string $originalTitle Original title of the movie
   * @param string $nationality Nationality of the movie
   * @param string $date Date of the movie
   * @param integer $vote Vote of the movie
   * @param string $image Image of the movie
   */
  public function __construct($id=-1,$title="",$originalTitle="",$nationality="",$date="",$vote=0,$image=""){
    $this->id = $id;
    $this->title = $title;
    $this->originalTitle = $originalTitle;
    $this->nationality = $nationality;
    $this->date = $date ? getDate(strtotime($date)) : getDate(strtotime(date("Y-m-d")));
    $this->vote = $vote;
    $this->image = $image;
  }

  /**
   * Method used to fetch movies data from sql database
   *
   * @param mysqli $conn Connection with the sql database
   * @return array Array of movies object
   */
  public static function fetchMoviesFromDatabase($conn){
    $movies = [];
    if($conn){
      $sql = "SELECT * FROM movies";
      $result = $conn->query($sql);
      if($result && $result->num_rows > 0){
        while($row = $result->fetch_object()){
          $movies[] = new Movie($row->id,$row->title,$row->original_title,$row->nationality,$row->date,$row->vote,$row->image);
        }
      }elseif($result){
        echo "[User.getArrayOfUsers] Nessun utente trovato";
      }else{
        echo "[User.getArrayOfUsers] Query error!";
      }
    }
    return $movies;
  }

  /**
   * Method used to print the movie card with the data saved in the current instance of Movie
   *
   * @return void
   */
  public function printMovieCard(){
    echo '<div class="card" style="width: 18rem;">
          <img src="'.$this->image.'" class="card-img-top" alt="'.$this->title.'">
          <div class="card-body">
            <h5 class="card-title">'.$this->title.'</h5>
            <p class="card-text">'.$this->originalTitle.'</p>
            <p class="card-text">'.$this->nationality.'</p>
            <p class="card-text">'.$this->vote.'</p>
            <p class="card-text">'.$this->getDateString().'</p>
          </div>
        </div>';
  }
  
  /**
   * Method used to get the date in the format "month (letter) year"
   *
   * @return string Date as string in the specified format
   */
  public function getDateString(){
    return $this->date["month"]." ".$this->date["year"];
  }
}