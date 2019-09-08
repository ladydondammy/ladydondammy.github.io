<?php


if(isset($_POST ['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $title = $_POST['title'];
  $message = $_POST['message'];

  
  $data = $name . " , " . $email . " , " . $title . " , " . $message . "\r\n";


  $saveMgs = file_put_contents('contact.txt', $data, FILE_APPEND | LOCK_EX);

  echo "<script type='text/javascript'>alert('Your message has been sent. I'll get back to you shortly')</script>";
  echo "<script type'text/javascript'>document.location='esther.html'</script>";


}


?>