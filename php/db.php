<?php
    $servername='localhost';
    $username='id21075242_admin';
    $password='Admin123_';
    $dbname = "id21075242_undangan";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>