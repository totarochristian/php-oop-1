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
  public static function fetchMoviesFromDatabase(){
    
  }
}