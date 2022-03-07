<?php
  
   $conn = mysqli_connect('localhost', 'Hadi', 'HADI1998', 'prototype');

   // check connection
 if(!$conn){
      echo 'Connection error: ' . mysqli_connect_error(); 
  }
?>