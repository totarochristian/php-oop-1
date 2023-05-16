<?php
class Movie{
  private int $id;
  private string $title;
  private string $originalTitle;
  private string $nationality;
  private DateTime $date;
  private float $vote;
  private string $image;
  public function __construct($id=-1,$title="",$originalTitle="",$nationality="",$date="",$vote=0,$image=""){
    $this->id = $id;
    $this->title = $title;
    $this->originalTitle = $originalTitle;
    $this->nationality = $nationality;
    $this->$date = $date ? getDate(strtotime($date)) : date("Y-m-d");
    $this->vote = $vote;
    $this->image = $image;
  }
  public static function fetchMoviesFromDatabase($conn){
    $movies = [];
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
    return $movies;
  }
}