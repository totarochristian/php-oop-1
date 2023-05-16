<?php
//Start the session
session_start();

//Define constant for the mysqli connection
define("DB_SERVERNAME","localhost");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
define("DB_NAME","db_books");

//Create the connection
$conn = new mysqli(DB_SERVERNAME,DB_USERNAME,DB_PASSWORD,DB_NAME);

//CHeck the connection, if errors, print in the screen
if($conn && $conn->connect_error){
  echo "Connection failed: ".$conn->connect_error;
}