<?php
//  AH, By The Way ! Içi c'est Connection aux BDD, But hey PSST don't tell to uncle Sam 
  $hostname = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "chat_by_the_way";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
