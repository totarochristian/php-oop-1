<?php
//Start the session
session_start();

//Define constant for the mysqli connection
define("DB_SERVERNAME","localhost");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
define("DB_NAME","db_books");

$conn = null;
try {
  //Create the connection
  $conn = new mysqli(DB_SERVERNAME,DB_USERNAME,DB_PASSWORD,DB_NAME);
  //Check the connection, if errors, throw new exception
  if ($conn->connect_errno) 
      throw new Exception($conn->connect_error);

} catch (Exception $e) {
  echo $e->getMessage();
}