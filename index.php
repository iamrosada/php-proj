
<?php


//conect to database 

$conn = mysqli_connect('localhost', ' type here username', 'type the passworsd', 'name of your database that you will create in phpAdmin')

// check connection 

if(!$conn){
  echo 'Connection error' . mysqli_connect_error();

}


?>