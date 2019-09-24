<?php


if(isset($_POST ['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $title = $_POST['title'];
  $message = $_POST['message'];

  
 $data = $name . " , " . $email . " , " . $title . " , " . $message . "\r\n";


  $saveMgs = file_put_contents('contact.txt', $data, FILE_APPEND | LOCK_EX);

  echo "<pre> Full Name - $name <br>
  Email - $email <br>
  Subject - $title <br>
  Message - $message <br></pre>";
}


?>
